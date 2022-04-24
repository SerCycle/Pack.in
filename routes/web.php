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
    return view('page.landing',[
        "title" => "Pack.in"
    ]);
});

Route::get('/service', function () {
    return view('page.servicepage',[
        "title" => "Pack.in | Service"
    ]);
});

Route::get('/product', function () {
    return view('servicepage.product',[
        "title" => "Pack.in | Product Detail"
    ]);
});

Route::get('/about', function () {
    return view('page.about',[
        "title" => "Pack.in | About Us"
    ]);
});

Route::get('/home', function () {
    return view('page.home',[
        "title" => "Pack.in | Home"
    ]);
});