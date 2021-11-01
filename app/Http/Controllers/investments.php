<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class investments extends Controller
{
     // Pricing
     public function PricingIndex()
     {
         return view('earnings.pricing');
     }
     public function PricingPost(Request $req)
     {
         dd($req);
     }
      // Adding New Investments
    public function  addInvestmentIndex()
    {
        return view('auth.login');
    }
    public function addInvestmentPost(Request $req)
    {
        dd($req);
    }

      // Pending Investments
    public function  PendingInvestmentIndex()
    {
        return view('earnings.pending');
    }
    public function PendingInvestmentPost(Request $req)
    {
        dd($req);
    }

    // Mature Investments
    public function  MatureInvestmentIndex()
    {
        return view('earnings.matured');
    }
    public function MatureInvestmentPost(Request $req)
    {
        dd($req);
    }

    // flagged investment
    public function  FlaggedInvestmentIndex()
    {
        return view('earnings.flagged');
    }
    public function FlaggedInvestmentPost(Request $req)
    {
        dd($req);
    }
}
