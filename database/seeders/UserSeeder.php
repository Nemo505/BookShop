<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Carbon\Carbon;
use Faker;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
		$faker = \Faker\Factory::create();
		$now = Carbon::now();
     	
     	$admin = new User;
     	$admin->name = $faker->name($gender = 'null'|'male'|'female');
        
	    $admin->email = 'admin@gmail.com';
	    $admin->password = Hash::make('123456789');
	    $admin->phone = $faker->randomNumber(5, true);
	    $admin->address = $faker->address();
        $admin->created_at = $now ;
        $admin->updated_at = $now;

        $admin->save();
        $admin->assignRole('admin');
            
    }
}
