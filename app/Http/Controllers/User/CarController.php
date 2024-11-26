<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarController extends Controller
{

    public function viewAllCars(){
        return view("user.cars");
    }
    public function viewCar($id){
        return view("user.car");
    }
    public function viewMyCars(){
        return view("user.my_cars");
    }
    public function viewAddCar(){
        return view("user.add_car");
    }
    public function viewFavoriteCars(){
        return view("user.favorite_cars");
    }
    public function addCar(Request $request){

    }
    public function viewEditCar($id){
        return view("user.edit_car");
    }
    public function editCar(Request $request, $id){

    }
    public function deleteCar($id){

    }
    
}
