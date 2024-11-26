<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\CarController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/ana-sehife",[HomeController::class,"viewHome"])->name("viewHome");

Route::get("/qeydiyyat",[AuthController::class,"viewRegister"])->name("viewRegister");
Route::post("/qeydiyyat",[AuthController::class,"register"])->name("register");
Route::get("/daxil-ol",[AuthController::class,"viewLogin"])->name("viewLogin");
Route::post("/daxil-ol",[AuthController::class,"login"])->name("login");
Route::post("/sifreni-unuttum",[AuthController::class,"viewForgotPassword"])->name("viewForgotPassword");
Route::post("/cixis",[AuthController::class,"logout"])->name("logout");


Route::get("/masinlarim",[CarController::class,"viewMyCars"])->name("viewMyCars");
Route::get("/secilmisler",[CarController::class,"viewFavoriteCars"])->name("viewFavoriteCars");

Route::get("/masin/{id}/redakte",[CarController::class,"viewEditCar"])->name("viewEditCar");
Route::put("/masin/{id}",[CarController::class,"editCar"])->name("editCar");
Route::delete("/masin//{id}",[CarController::class,"deleteCar"])->name("deleteCar");
Route::get("/masin-elave-et",[CarController::class,"viewAddCar"])->name("viewAddCar");
Route::post("/masin-elave-et",[CarController::class,"addCar"])->name("addCar");
Route::get("/masinlar",action: [CarController::class,"viewAllCars"])->name("viewAllCars");