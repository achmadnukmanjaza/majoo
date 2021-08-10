<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Users;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('name','password'))){
            return redirect('/master_catalog');
        }
        
        return redirect('login')->with('alert','Username / Password yang dimasukkan salah!');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('catalog');
    }
}
