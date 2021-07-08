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
    	$password = $request->password;
    	// dd($password);
    	$user = User::where('email',$email)->first();

    	// dd($user);

    	if ($user->password == $password) {
    		
    		$credentials = $request->only('email', 'password');
    		Auth::attempt($credentials);

    		return redirect('article');

    	}else{
    		return redirect()->back();
    	}
    }
}
