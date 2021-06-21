<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        return view("auth.login");
    }

    public function register()
    {
        return view("auth.register");
    }

    public function postlogin(Request $req)
    {
        $credentials = Auth::attempt(["email" => $req->email, "password" => $req->password]);

        if(!$credentials)
        {
            return redirect()->back();
        }else{
            return redirect("/dashboard/profile");
        }
    }

    public function postregister(Request $req)
    {
        $req->validate([
            "email" => "required",
            "name" => "required",
            "password" => "required"
        ]);

        DB::table("users")->insert([
            "name" => $req->name,
            "email" => $req->email,
            "password" => Hash::make($req->password),
            "level" => 1
        ]);

        return redirect("/auth/login");   
    }

    public function logout(Request $req)
    {
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect("/auth/login");
    }

}
