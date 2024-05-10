<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\Transport;
use App\Models\Trip;
use Illuminate\Http\Request;

class TransportController extends Controller
{

    public function index()
    {
        $trucks = Transport::all();

        return view('transport', [
            'trucks' => $trucks
        ]);

    }

    public function show(string $id)
    {
        $trip = Trip::findOrFail($id);


        //Получаем все товары рейса с заданным ID
        $trip_transport = Transport::where('trip_id', $trip->id)->get();

        return view('trip_cargoes', [
            'trip' => $trip,
            'trip_cargo' => $trip_transport
        ]);
    }
}
