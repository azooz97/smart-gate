<?php

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
    return view('components.Core.home',['data'=> 'landing']);
});

Route::get('/profile', function () {
    return view('components.Core.profile',['data'=> 'homepage']);
});

Route::get('/dump', function () {
    return view('dump',['data'=> 'sendmoney']);
});

Route::get('/parent', function () {
    return view('components.Core.parent',['data'=> 'homepage']);
});

Route::get('/recharge', function () {
    return view('components.Core.rechargeWallet',['data'=> 'sendmoney']);
});

Route::get('/canteen', function () {
    return view('components.Core.canteen',['data'=> 'products']);
});
