<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthNativeController extends Controller
{
	public function index(){
		return view('homepage/form');
	}
	public function auth(REQUEST $request)
	{
		$email = $request->email;
		$pass = $request->password;
		if (Auth::attempt(['email' => $email, 'password' => $pass])){ 
			return redirect('homepage');
		}else{
			return redirect()->back();
		}
	}
}
