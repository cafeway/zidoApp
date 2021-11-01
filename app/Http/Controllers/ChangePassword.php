<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChangePassword extends Controller
{
    // index function
    public function index ()
    {
        return view('auth.ChangePassword');
    }

    // post function
    public function post (Request  $req)
    {
        dd($req);
    }
}
