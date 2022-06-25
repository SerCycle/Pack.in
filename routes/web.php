<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\OrderController;

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

Route::get('/jualkardus', function () {
    return view('servicepage.JualKardus.jualkardus',[
        "title" => "Pack.in | Service - Jual Kardus",
        "nav" => "2"
    ]);
});

Route::get('/jualkardusform1', function () {
    return view('servicepage.JualKardus.jualkardusform1',[
        "title" => "Pack.in | Service - Jual Kardus Form 1",
        "nav" => "2"
    ]);
});

Route::get('/jualkardusform2', function () {
    return view('servicepage.JualKardus.jualkardusform2',[
        "title" => "Pack.in | Service - Jual Kardus Form 2",
        "nav" => "2"
    ]);
});

Route::get('/jualkardusform3', function () {
    return view('servicepage.JualKardus.jualkardusform3',[
        "title" => "Pack.in | Service - Jual Kardus Form 3",
        "nav" => "2"
    ]);
});

Route::get('/jualkardusform4', function () {
    return view('servicepage.JualKardus.jualkardusform4',[
        "title" => "Pack.in | Service - Jual Kardus Form 4",
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

Route::get('/service', [PageController::class, 'servicePage'])->name('Service');
Route::get('/product/{id}', [ProductController::class, 'selectedProduct'])->name('selectedProduct');

Route::get('/designorder/{id}', [OrderController::class, 'orderProduct1'])->name('OrderProduct1');
Route::post('/biodataorder/{id}', [OrderController::class, 'orderProduct2'])->name('OrderProduct2');
Route::post('/validatedorder/{id}', [OrderController::class, 'orderProduct3'])->name('OrderProduct3');
Route::post('/OrderDone', [OrderController::class, 'orderFinal'])->name('OrderProductFinal');

// Route::get('track/{id}', [UserController::class, 'index'])->name('user.index');

// Route::get('/productorder1', function () {
//     return view('servicepage.ProductOrder.productorder1',[
//         "title" => "Pack.in | Product Order Design",
//         "nav" => "2"
//     ]);
// });

// Route::get('/productorder2', function () {
//     return view('servicepage.ProductOrder.productorder2',[
//         "title" => "Pack.in | Product Order Biodata",
//         "nav" => "2"
//     ]);
// });

// Route::get('/productorder3', function () {
//     return view('servicepage.ProductOrder.productorder3',[
//         "title" => "Pack.in | Product Order Detail",
//         "nav" => "2"
//     ]);
// });

Route::get('/productorder4', function () {
    return view('servicepage.ProductOrder.productorder4',[
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
        "nav" => "11"
    ]);
});

Route::get('/admin-cardboardinfo', function () {
    return view('admin.sell_cardboard_info',[
        "title" => "Pack.in | Sell Cardboard",
        "nav" => "22"
    ]);
});
