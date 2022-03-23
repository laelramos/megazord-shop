<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function dashboard()
    {
        if (Auth::check() === true)
        {
            return view('dashboard');
        } 

        return redirect()->route('login');
    }


    public function showLogin()
    {
        return view('login');   
    }


    public function login(Request $request)
    {
        var_dump($request->all());

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        Auth::attempt($credentials);
    }
}
