<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Car;

class ListController extends Controller
{
    public function index(){

        $cars = Car::all();

        return view('list', ['cars' => $cars]);
    }
}
