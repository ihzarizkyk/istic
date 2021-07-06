<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\LogActivity;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class ActivityController extends Controller
{

    public function __construct()
    {
        return $this->middleware(["auth"]);
    }

    public function index()
    {

    $logs = Auth::user()->activities()->get();
    return view("user.log.index",["loghistory" => $logs]);

    }
}
