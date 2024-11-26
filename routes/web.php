<?php

use App\Http\Controllers\User\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/index",function(){
    return view("pages.index");
});

Route::get("/register",[AuthController::class,"viewRegister"])->name("viewRegister");
Route::post("/register",[AuthController::class,"viewRegister"])->name("register");
Route::get("/login",[AuthController::class,"viewLogin"])->name("login");
Route::post("/login",[AuthController::class,"login"])->name("login");