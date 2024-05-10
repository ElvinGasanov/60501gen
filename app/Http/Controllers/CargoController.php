<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\Trip;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    public function index()
    {
        $cargoes = Cargo::all();

        $trip = Trip::all();


        return view('cargoes', compact('cargoes', 'trip'));
    }


    public function show(string $id)
    {
        $trip = Trip::findOrFail($id);


        //Получаем все товары рейса с заданным ID
        $trip_cargo = Cargo::where('trip_id', $trip->id)->get();

        return view('trip_cargoes', [
            'trip' => $trip,
            'trip_cargo' => $trip_cargo
        ]);
    }
}
