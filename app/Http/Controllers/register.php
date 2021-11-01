<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class register extends Controller
{
    // rendering blade file
    public function index ()
    {
        return view('auth.register');
    }
    public function post(Request $req)
    {

        // Validating and sanitizing input
        $req -> validate([
            'username' => 'unique:users|max:200',
            'phonenumber' => 'unique:users',
            'email' => 'unique:users|email',
            'passowrd' => 'confirmed'
        ]);
        dd($req);
    }
}
