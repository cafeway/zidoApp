<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Hash;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Support\Facades\Hash as FacadesHash;

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
        $this-> validate($req,[
            'username' => 'unique:users|max:200',
            'phonenumber' => 'unique:users',
            'email' => 'unique:users|email',
            'password' => 'confirmed',
        ]);
        // Dump the data to db
        User::create([
            'username' => $req->username,
            'email' => $req->email,
            'phonenumber' => $req->phonenumber,
            'password' => FacadesHash::make($req-> password),
            'nationality' => $req -> country,
            // 'lv1' =>
            // 'lv2' =>
            // 'lv3' =>
            'balance' => 0,
            'bonus' => 0,
            'downlines' => 0,
            'withdrawals' => 0,
            'ads_viewed' => 0,
            'social_links_clicked' => 0,
            'bids' => 0,
            'revenue' =>0,

        ]);
        return redirect($to= '/login');

    }
}
