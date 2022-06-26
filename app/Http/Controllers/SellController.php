<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\sell;
use Illuminate\Http\Request;

class SellController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function AddBioPenjual(Request $request)
    {
        $NewUsers = new user();
        $generateUserId = rand(10000000, 20000000);
        $NewUsers->user_id = $generateUserId;
        $NewUsers->user_fullname = $request->user_fullname;
        $NewUsers->phone = $request->phone;
        $NewUsers->address = $request->address;
        $NewUsers->save();

        $users = user::where('user_id', $generateUserId)->first();

        $title = "Pack.in | Jual Kardus";

        return view('servicepage.JualKardus.jualkardusform2', compact("users", "title"));
    }

    public function AddProductSell(Request $request)
    {
        $NewSells = new sell();
        $generateSellId = rand(10000000, 20000000);
        $NewSells->sell_id = $generateSellId;
        $NewSells->user_id = $request->user_id;
        $NewSells->ketebalan = $request->ketebalan;
        $NewSells->berat = $request->berat;
        $NewSells->kondisi = $request->kondisi;
        $NewSells->sell_date = "none";
        $NewSells->sell_status = "none";
        $NewSells->save();

        $sells = sell::where('sell_id', $generateSellId)->first();

        $title = "Pack.in | Jual Kardus";

        return view('servicepage.JualKardus.jualkardusform3', compact("sells", "title"));
    }

    public function UpdateProductSell(Request $request)
    {
        sell::where('sell_id', $request->sell_id)
            ->update(['sell_date' => $request->sell_date,
                        'sell_status' => "Info Submitted"]);
        
        $sells = sell::where('sell_id', $request->sell_id)->first();

        $title = "Pack.in | Jual Kardus";

        return view('servicepage.JualKardus.jualkardusform4');
    }
}
