<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Employee;
use App\Http\Middleware\Admin;
use App\Http\Middleware\User;

Route::get("/","HomeController@index");

// AUTH

Route::get("/auth/login","AuthController@index");
Route::get("/auth/register","AuthController@register");
Route::post("/auth/postlogin","AuthController@postlogin");
Route::post("/auth/postregister","AuthController@postregister");
Route::get("/auth/logout","AuthController@logout");

Route::post("/tracking/resi","TrackingController@track");
Route::get("/tracking","TrackingController@index");

// Product Routes
Route::get("/user/product","ProductController@index");
Route::get("/user/product/cancel/{id}","ProductController@cancel");

Route::get("/dashboard/profile","DashboardController@profile");
Route::get("/dashboard","DashboardController@index");
Route::get("/dashboard/process/{id}","DashboardController@process");