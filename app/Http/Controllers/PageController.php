<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class PageController extends Controller
{
    public function servicePage()
    {
        $products = product::all();
        $title = "Pack.in | Service";
        $nav = "2";
        return view('page.servicepage', compact("products", "title", "nav"));
    }

    public function JualKardusPage()
    {
        $title = "Pack.in - Jual Kardus";

        return view('servicepage.JualKardus.jualkardusform1', compact("title"));
    }
}
