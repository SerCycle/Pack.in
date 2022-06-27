<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\SellController;
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

Route::get('/Admin', function () {
    return view('admin.home',[
        "title" => "Pack.in | Wellcome Admin",
        "nav" => "2"
    ]);
});

Route::get('/Home', [PageController::class, 'HomePage'])->name('Home');
Route::get('/Service', [PageController::class, 'servicePage'])->name('Service');
Route::get('/JualKardus/Bio', [PageController::class, 'JualKardusPage'])->name('JualKardus');
Route::get('/About', [PageController::class, 'AboutPage'])->name('About');
Route::get('/JualKardus', [PageController::class, 'Jual'])->name('Jual');

Route::get('/Product/{id}', [ProductController::class, 'selectedProduct'])->name('selectedProduct');

Route::get('/DesignOrder/{id}', [OrderController::class, 'orderProduct1'])->name('OrderProduct1');
Route::post('/BiodataOrder/{id}', [OrderController::class, 'orderProduct2'])->name('OrderProduct2');
Route::post('/ValidatedOrder/{id}', [OrderController::class, 'orderProduct3'])->name('OrderProduct3');
Route::post('/OrderDone', [OrderController::class, 'orderFinal'])->name('OrderProductFinal');

Route::post('/Tracking', [ShipmentController::class, 'trackProduct'])->name('Tracking');

Route::post('/FormJualKardus/Biodata', [SellController::class, 'AddBioPenjual'])->name('AddBioPenjual');
Route::post('/FormJualKardus/DescKardus', [SellController::class, 'AddProductSell'])->name('AddProductSell');
Route::post('/FormJualKardus/DateKardus', [SellController::class, 'UpdateProductSell'])->name('UpdateProductSell');

Route::get('/Admin/OrderInfo', [OrderController::class, 'AdminOrder'])->name('AdminOrder');
Route::post('/Admin/OrderInfo/InfoUpdated', [OrderController::class, 'UpdateOrderAdmin'])->name('UpdateOrderAdmin');
Route::get('/Admin/CardboardInfo', [SellController::class, 'AdminSell'])->name('AdminSell');
Route::post('/Admin/SellInfo/InfoUpdated', [SellController::class, 'UpdateSellAdmin'])->name('UpdateSellAdmin');

// Route::get('/aboutus', function () {
//     return view('page.aboutus',[
//         "title" => "Pack.in | About Us",
//         "nav" => "3"
//     ]);
// });

// Route::get('/home', function () {
//     return view('page.home',[
//         "title" => "Pack.in | Home",
//         "nav" => "1"
//     ]);
// });
