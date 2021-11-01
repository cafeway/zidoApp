<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class downlines extends Controller
{
    //
    // rendering blade file
    public function index ()
    {
        return view('user.downlines');
    }
    public function post(Request $req)
    {
        dd($req);
    }
}
