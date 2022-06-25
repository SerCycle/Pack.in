<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\order;
use App\Models\User;
use App\Models\shipment;
use App\Models\payment;
use Illuminate\Http\Request;

class ShipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function trackProduct(Request $request)
    {
        $order_id = $request->order_id;
        $title = "Pack.in | Home Page - Cek Pesanan";

        $orders = order::where('order_id', $order_id)->first();
        $products = product::where('product_id', $orders->product_id)->first();
        $users = user::where('user_id', $orders->user_id)->first(); 

        if ( $orders->order_status == "unpaid" ) {
            return view('servicepage.ProductOrder.productorder3', compact("title", "orders", "products", "users"));
        } elseif ( $orders->order_status == "Paid" ) {
            return view('servicepage.ProductOrder.productorder4', compact("title", "orders", "products", "users"));
        } elseif ( $orders->order_status == "Order Received" || "On Packing" || "Delivered" ) {
            return view('page.cekpesanan2', compact("orders", "order_id", "title"));
        }
    }
}
