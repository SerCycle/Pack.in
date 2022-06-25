<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\order;
use App\Models\User;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function selectedProduct(Request $request, $id)
    {
        $products = product::all();
        $id = $request->id;
        $idproduct = $products[$id-1]->product_id;
        $name = $products[$id-1]->product_name;
        $harga = $products[$id-1]->harga;
        $description = $products[$id-1]->description;
        $image = $products[$id-1]->image;
        $stock = $products[$id-1]->stock;
        $title = "Pack.in | Product Detail";
        $nav = "2";
        return view('servicepage.product', compact("products", "id", "name", "harga", 
                                                    "description", "image", "stock",
                                                    "title", "idproduct", "nav"));
    }

    public function orderProduct1(Request $request, $id)
    {
        $products = product::all();
        $id = $request->id;
        $idproduct = $products[$id-1]->product_id;
        $name = $products[$id-1]->product_name;
        $harga = $products[$id-1]->harga;
        $image = $products[$id-1]->image;
        $title = "Pack.in | Product Order Design";
        $nav = "2";
        return view('servicepage.ProductOrder.productorder1', compact("products", "id", "name", "harga", 
                                                                    "image", "title", "idproduct", "nav"));
    }

    public function orderProduct2(Request $request)
    {
        $products = product::all();
        $idproduct = $request->product_id;
        $name = $products[$idproduct-1]->product_name;
        $harga = $products[$idproduct-1]->harga;
        $image = $products[$idproduct-1]->image;
        $warna = $request->warna;

        if ($files = $request->file('design_user')) {
            $destinationPath = 'StorageImage';
            $file = $request->file('design_user');
            $designImage = "design_user" . rand(10000, 20000) . "." . $files->getClientOriginalExtension();
            $imgPath = $file->storeAs('', $designImage);
            $files->move($destinationPath, $designImage);
        } else {
            $imgPath = "none";
        }

        $NewOrders = new order();
        $generateOrderId = rand(10000000, 20000000);
        $NewOrders->order_id = $generateOrderId;
        $NewOrders->user_id = 1;
        $NewOrders->product_id = $idproduct;
        $NewOrders->order_date = date('Y-m-d H:i:s');
        $NewOrders->order_status = "unpaid";
        $NewOrders->warna = $warna;
        $NewOrders->design_user = $imgPath;
        $NewOrders->save();
        
        $title = "Pack.in | Product Order Biodata";
        $nav = "2";
        return view('servicepage.ProductOrder.productorder2', compact("products", "name", "harga", 
                                                                    "image", "title", "idproduct", "nav",
                                                                    "warna", "generateOrderId"));
    }

    public function orderProduct3(Request $request)
    {
        $user_fullname = $request->user_fullname;
        $phone = $request->phone;
        $address = $request->address;

        $NewUsers = new user();
        $generateUserId = rand(10000000, 20000000);
        $NewUsers->user_id = $generateUserId;
        $NewUsers->user_fullname = $user_fullname;
        $NewUsers->phone = $phone;
        $NewUsers->address = $address;
        $NewUsers->save();
        
        order::where('order_id', $request->order_id)
            ->update(['user_id' => $generateUserId]);

        $users = user::where('user_id', $generateUserId)->first();    
        $orders = order::where('order_id', $request->order_id)->first();
        $products = product::where('product_id', $request->product_id)->first();

        $title = "Pack.in | Product Order Detail";
        $nav = "2";

        return view('servicepage.ProductOrder.productorder3', compact("orders", "products",
                                                                "users", "title", "nav"));
    }
}
