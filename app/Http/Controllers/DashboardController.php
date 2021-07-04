<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
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
        $product = DB::table("products")->get();
        $count = DB::table("products")->count();
        return view("dashboard.index",["count" => $count,"product" => $product]);
    }

    public function users()
    {
        $usr = DB::table("users")->get();
        return view("dashboard.usermanage",["users" => $usr]);
    }

    public function profile()
    {
       return view("dashboard.profile.index");
    }

    public function input(Request $req, $id)
    {
        DB::table("products")->where("id",$req->id)->update
        (
            [
                "resi" => Str::random(8),
                "status" => "sedang dalam input"
            ]
        );

        return redirect()->back();
    }

    public function brought(Request $req,$id)
    {
        DB::table("products")->where("id",$req->id)->update
        (
            [
                "status" => "sedang dibawa kurir"
            ]
        );

        return redirect()->back();  
    }

    public function save(Request $req,$id)
    {
        DB::table("products")->where("id",$req->id)->update
        (
            [
                "status" => "Paket sedang disimpan di gudang"
            ]
        );

        return redirect()->back();   
    }

    public function send(Request $req,$id)
    {
        DB::table("products")->where("id",$req->id)->update
        (
            [
                "status" => "sedang dikirim ke rumahmu"
            ]
        );

        return redirect()->back();
    }

    public function receive(Request $req,$id)
    {
        DB::table("products")->where("id",$req->id)->update
        (
            [
                "status" => "Barang Sudah Diterima"
            ]
        );

        return redirect()->back();   
    }

}
