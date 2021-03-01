<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $languages = array('Myanmar','English');
        $now = Carbon::now();

        foreach ($languages as $language) {
        	DB::table('languages')->insert([
            'name' => $language,
            'created_at' => $now ,
            'updated_at' => $now,
            
        ]);
    	}
    }
}
