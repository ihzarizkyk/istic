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

// Log History
Route::get("/user/log","ActivityController@index");

Route::get("/dashboard/profile","DashboardController@profile");
Route::get("/dashboard","DashboardController@index");
Route::get("/dashboard/input/{id}","DashboardController@input");
Route::get("/dashboard/brought/{id}","DashboardController@brought");
Route::get("/dashboard/save/{id}","DashboardController@save");
Route::get("/dashboard/send/{id}","DashboardController@send");
Route::get("/dashboard/receive/{id}","DashboardController@receive");
Route::get("/dashboard/usermanage","DashboardController@users");
Route::get("/dashboard/usermanage/del/{id}","DashboardController@delusr");