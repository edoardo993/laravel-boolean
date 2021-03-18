<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Car;

class ListController extends Controller
{
    public function index($id=null, $name=null){

        $cars = Car::all();

        $brands = [];

        foreach($cars as $car){
            $brands[] = $car->marca;
        }

        if($id === null && $name === null){
            return view('list', ['cars' => $cars]);
        }elseif($id > (count($cars)-1) || $name !== $cars[$id]['marca']){
            echo 'L\'auto selezionata non è nel sistema. Riprova';
        }else{
            return view('car', ['cars' => $cars, 'id' => $id]);
        }
    }
}
