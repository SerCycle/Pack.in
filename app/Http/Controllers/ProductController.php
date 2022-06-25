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
}
