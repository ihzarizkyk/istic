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
        $date = date('Y-m-d H:i:s');

        if(!$credentials)
        {
            return redirect()->back();
        }else{

            DB::table("activity")->insert([
                "user_id" => Auth::user()->id,
                "name" => Auth::user()->name,
                "status" => "Login",
                "user_agent" => $req->header('User-Agent'),
                "ip" => $req->ip(),
                "created_at" => $date
            ]);

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
            "level" => 7
        ]);

        return redirect("/auth/login");   
    }

    public function logout(Request $req)
    {
        $date = date('Y-m-d H:i:s');
        
        DB::table("activity")->insert([
            "user_id" => Auth::user()->id,
            "name" => Auth::user()->name,
            "status" => "Logout",
            "user_agent" => $req->header('User-Agent'),
            "ip" => $req->ip(),
            "created_at" => $date
        ]);

        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect("/auth/login");
    }

}

/*

Level 1 : ihza rizky , ihzarizky30@gmail.com
Level 2 : anton, anton@gmail.com
Level 3 : john, john@gmail.com
Level 4 : budi, budi@gmail.com
Level 5 : andi, andi@gmail.com
Level 6 : users, users@gmail.com
Level 7 : admin, admin@gmail.com

*/