<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profile extends Controller
{
    // rendering blade file
    public function index ()
    {
        return view('user.profile');
    }
    public function post(Request $req)
    {
        dd($req);
    }
}

