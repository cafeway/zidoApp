<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class home extends Controller
{
    //
    public function index ()
    {
        $UsersName = Auth::user() ->username;
        $url = url($path='/register',$parameter = [$UsersName]);
        return view('welcome',[
            'url' => $url
        ]);
    }
}
