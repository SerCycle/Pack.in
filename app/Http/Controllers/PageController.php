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

    public function HomePage()
    {
        $title = "Pack.in | Home";
        $nav = "1";

        return view('page.home', compact("title", "nav"));
    }

    public function AboutPage()
    {
        $title = "Pack.in | About Us";
        $nav = "3";

        return view('page.aboutus', compact("title", "nav"));
    }

    public function Jual()
    {
        $title = "Pack.in | Jual Kardus";
        $nav = "3";

        return view('servicepage.JualKardus.jualkardus', compact("title", "nav"));
    }
}
