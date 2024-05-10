<?php

namespace App\Http\Controllers;

use App\Models\Transport;
use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function index()
    {
        $trips = Trip::all();

        return view('trips', [
            'trips' => $trips
        ]);
    }

    public function show(string $id)
    {
        $trip = Trip::findOrFail($id);

        $trip_trucks = Transport::where('id', $trip->transport_id)->get();


        return view('trip_transports', [
            'trip' => $trip,
            'trip_trucks' => $trip_trucks
        ]);
    }
}
