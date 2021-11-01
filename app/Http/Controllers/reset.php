<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class reset extends Controller
{
    // rendering blade file
    public function index (Request $req)
    {
        // var_dump($req->request);
        return view('auth.pwdreset');
    }
    public function post(Request $req)
    {
        dd($req);
    }
}
