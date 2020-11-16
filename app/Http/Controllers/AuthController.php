<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function postlogin(Request $request)
    {
    	if(Auth::attempt($request->only('email','password')))
    	{
    		return redirect('/welcome');
    	}
    	return redirect('/')->with('danger','Username atau Sandi Salah');
    }

    public function logout()
    {
    	Auth::logout();

    	return redirect('/');
    }

}
