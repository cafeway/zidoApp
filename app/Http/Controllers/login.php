<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login extends Controller
{
    // rendering blade file
    public function index ()
    {
        return view('auth.login');
    }
    public function post(Request $req)
    {
        dd($req);
    }
}
