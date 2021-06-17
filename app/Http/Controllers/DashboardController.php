<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function __construct()
    {
        //
    }

    public function index()
    {
        //
    }

    public function profile($id)
    {
        $user = DB::table("users")->where("id",$id)->get();
        return view("dashboard.profile.index",["user" => $user]);
    }
}
