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
    return view('home',[
    "active"=>'Home',
    "title"=>'Home'
    ]);
});
Route::get('/produk', function () {
    return view('produk',[
    "active"=>'produk',
    "title"=>'Produk'
    ]);
});
Route::get('/aboutus', function () {
    return view('aboutus',[
    "active"=>'aboutus',
    "title"=>'About Us'
    ]);
});
Route::get('/promo', function () {
    return view('promo',[
    "active"=>'promo',
    "title"=>'Promo'
    ]);
});
