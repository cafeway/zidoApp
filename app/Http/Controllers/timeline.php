<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class timeline extends Controller
{
    // rendering blade file
    public function index ()
    {
        return view('user.timeline');
    }
    public function post(Request $req)
    {
        dd($req);
    }
}
