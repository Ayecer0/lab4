<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    
    public function create()
    {
        return view('auth.signup');
    }

    
    public function signup(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'email'    => 'required|email',
            'password' => 'required|min:6',
        ]);

        return response()->json([
            'name'  => $request->input('name'),
            'email' => $request->input('email'),
        ]);
    }

    // страница входа
    public function login()
    {
        return view('auth.login');
    }

    
    public function signin(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|min:6',
        ]);

        return response()->json([
            'email' => $request->input('email'),
        ]);
    }
}