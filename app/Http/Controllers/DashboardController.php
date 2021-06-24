<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Product;
use App\Models\Shipping;

class DashboardController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        $shipping = DB::table("shipping")->get();
        $shipcount = DB::table("shipping")->count();
        $product = Product::withCount("shippings")->get();
        return view("dashboard.index",["shipcount" => $shipcount,"product" => $product,"shipping" => $shipping]);
    }

    public function profile()
    {
       return view("dashboard.profile.index");
    }

    public function process(Request $req, $id)
    {
        DB::table("shipping")->where("id",$req->id)->update
        (
            [
                "biaya_kirim" => 16000
            ]
        );

        return redirect()->back();
    }
}
