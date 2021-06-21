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
        return view("dashboard.index");
    }

    public function profile()
    {
       return view("dashboard.profile.index");
    }
}
