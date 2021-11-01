<?php

use App\Http\Controllers\ChangePassword;
use App\Http\Controllers\downlines;
use App\Http\Controllers\investments;
use App\Http\Controllers\login;
use App\Http\Controllers\p2p;
use App\Http\Controllers\register;
use App\Http\Controllers\reset;
use App\Http\Controllers\profile;
use App\Http\Controllers\timeline;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');


// LOGIN
Route::get('/login',[login::class,'index'])->name('login');
Route::post('/login',[login::class,'post']);

// REGISTER
Route::get('/register',[register::class,'index'])->name('register');
Route::post('/register',[register::class,'post']);

// PWSD RESET
Route::get('/reset',[reset::class,'index'])->name('reset');
Route::post('/reset',[reset::class,'post']);


// Change Password
Route::get('/ChangePassword',[ChangePassword::class,'index'])->name('change');
Route::post('/ChangePassword',[ChangePassword::class,'post']);


// Change Password
Route::get('/profile',[profile::class,'index'])->name('profile');
Route::post('/profile',[profile::class,'post']);

// Downlines
Route::get('/refferals',[downlines::class,'index'])->name('refferal');
Route::post('/refferals',[downlines::class,'post']);

// Downlines
Route::get('/timeline',[timeline::class,'index'])->name('timeline');
Route::post('/timeline',[timeline::class,'post']);

// Pending investments
Route::get('/pending',[investments::class,'PendingInvestmentIndex'])->name('pending');
Route::post('/pending',[investments::class,'PendingInvestmentPost']);

// Matured investments
Route::get('/matured',[investments::class,'MatureInvestmentIndex'])->name('matured');
Route::post('/matured',[investments::class,'MatureInvestmentPost']);

// Flagged investments
Route::get('/flagged',[investments::class,'FlaggedInvestmentIndex'])->name('flagged');
Route::post('/flagged',[investments::class,'FlaggedInvestmentPost']);

// Flagged investments
Route::get('/packages',[investments::class,'PricingIndex'])->name('pricing');
Route::post('/packages',[investments::class,'PricingPost']);


// p2p pair finding
Route::get('/pairing',[p2p::class,'PairIndex'])->name('paring');
Route::post('/pairing',[p2p::class,'PairPost']);
