<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrackingController extends Controller
{

    public function index()
    {
        return view("tracking");
    }

    public function track(Request $req)
    {
        $resi = $req->resi;
        $data = DB::table("products")->where("resi","like","%".$resi."%")->get();
        return view("tracking",["result" => $data]);
    }
}
