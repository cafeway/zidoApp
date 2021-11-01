<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class login extends Controller
{
    // rendering blade file
    public function index ()
    {
        return view('auth.login');
    }
    public function post(Request $req)
    {
        if (Auth::attempt(['email' => $req->email, 'password' => $req->password]))
        {
            return redirect($to = '/');
        } else {
            return redirect($to = '/login')->with('status','Wrong login credentials');
        }

    }
}
