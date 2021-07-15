<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AuthController extends Controller
{
    public function loginForm(){
    	return view('auth.login');
    }

    public function login(Request $request){

    	// dd($request->email);
    	Validator::make($request->all(), [
    		'email'=>['required','string','email'],
    		'password'=>['required','string','min:8']
    	])->validate();

    	$email = $request->email;
    	$password = Hash::make($request->password);
    	// dd($password);
    	$user = User::where('email',$email)->first();

    	// dd($user);

        if (Hash::check($request->password, $user->password)) {
            
            $role = $user->getRoleNames();

            $credentials = $request->only('email', 'password');
            Auth::attempt($credentials);

            // dd($role);
            if ($role[0]=='admin') {
                
                return redirect('category');
            }else{

                return redirect()->back();
            }
        }

    	// if ($user->password == $password) {
    		
    	// 	$credentials = $request->only('email', 'password');
    	// 	Auth::attempt($credentials);

    	// 	return redirect('category');

    	// }else{
    	// 	return redirect()->back();
    	// }
    }
}
