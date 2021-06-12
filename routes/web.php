<?php

use Illuminate\Support\Facades\Route;


Route::get("/","HomeController@index");

// AUTH

Route::get("/auth/login","AuthController@index");
Route::get("/auth/register","AuthController@register");
Route::post("/auth/postlogin","AuthController@postlogin");

Route::post("/tracking/resi","TrackingController@track");
Route::get("/tracking","TrackingController@index");