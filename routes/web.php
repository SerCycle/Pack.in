<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;

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
        "title" => "Pack.in",
        "nav" => "0"
    ]);
});

// Route::get('/service', function () {
//     return view('page.servicepage',[
//         "title" => "Pack.in | Service",
//         "nav" => "2"
//     ]);
// });

Route::get('/jualkardus', function () {
    return view('page.jualkardus',[
        "title" => "Pack.in | Service - Jual Kardus",
        "nav" => "2"
    ]);
});

Route::get('/jualkardusform1', function () {
    return view('page.jualkardusform1',[
        "title" => "Pack.in | Service - Jual Kardus Form 1",
        "nav" => "2"
    ]);
});

Route::get('/cekpesanan1', function () {
    return view('page.cekpesanan1',[
        "title" => "Pack.in | Home Page - Cek Pesanan",
        "nav" => "2"
    ]);
});

Route::get('/cekpesanan2', function () {
    return view('page.cekpesanan2',[
        "title" => "Pack.in | Home Page - Cek Pesanan",
        "nav" => "2"
    ]);
});
Route::get('/product', function () {
    return view('servicepage.product',[
        "title" => "Pack.in | Product Detail",
        "nav" => "2"
    ]);
});

Route::get('/service', [PageController::class, 'servicePage'])->name('Service');
Route::get('/product/{id}', [ProductController::class, 'selectedProduct'])->name('selectedProduct');

// Route::get('/product', function () {
//     return view('servicepage.product',[
//         "title" => "Pack.in | Product Detail",
//         "nav" => "2"
//     ]);
// });

Route::get('/productorder1', function () {
    return view('page.productorder1',[
        "title" => "Pack.in | Product Order Design",
        "nav" => "2"
    ]);
});

Route::get('/productorder2', function () {
    return view('page.productorder2',[
        "title" => "Pack.in | Product Order Biodata",
        "nav" => "2"
    ]);
});

Route::get('/productorder3', function () {
    return view('page.productorder3',[
        "title" => "Pack.in | Product Order Detail",
        "nav" => "2"
    ]);
});

Route::get('/productorder4', function () {
    return view('page.productorder4',[
        "title" => "Pack.in | Product Order Resi",
        "nav" => "2"
    ]);
});

Route::get('/aboutus', function () {
    return view('page.aboutus',[
        "title" => "Pack.in | About Us",
        "nav" => "3"
    ]);
});

Route::get('/home', function () {
    return view('page.home',[
        "title" => "Pack.in | Home",
        "nav" => "1"
    ]);
});

Route::get('/admin', function () {
    return view('admin.home',[
        "title" => "Pack.in | Wellcome Admin",
        "nav" => "2"
    ]);
});

Route::get('/admin-orderinfo', function () {
    return view('admin.order_info',[
        "title" => "Pack.in | Customize Order",
        "nav" => "2"
    ]);
});
