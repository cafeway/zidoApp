<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class p2p extends Controller
{
    // Finding Pairs
    public function PairIndex()
    {
        return view('p2p.paring');
    }
    public function PairPost(Request $req)
    {
        dd($req);
    }
}
