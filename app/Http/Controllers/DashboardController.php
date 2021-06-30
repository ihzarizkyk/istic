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
        $product = DB::table("product")->get();
        $count = DB::table("product")->count();
        return view("dashboard.index",["count" => $count,"product" => $product]);
    }

    public function profile()
    {
       return view("dashboard.profile.index");
    }

    public function process(Request $req, $id)
    {
        DB::table("products")->where("id",$req->id)->update
        (
            [
                "resi" => Str::random(8),
                "status" => "sedang dalam proses"
            ]
        );

        return redirect()->back();
    }

    public function deliver(Request $req,$id)
    {

    }

    public function shipp(Request $req,$id)
    {
        
    }

    public function clear(Request $req,$id)
    {
        
    }

    public function confirm(Request $req,$id)
    {
        
    }

    public function report(Request $req,$id)
    {
        
    }

}
