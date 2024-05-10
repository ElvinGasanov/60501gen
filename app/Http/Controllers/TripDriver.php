<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Transport;
use App\Models\Trip;
use Illuminate\Http\Request;

class TripDriver extends Controller
{
    public function show(string $id)
    {
        $trip = Trip::findOrFail($id);

        if ($trip->transport) {
            // Если транспорт существует, получаем водителя
            $driverOnTrip = $trip->transport->driver;
            return view('driver_on_trip', [
                'trip' => $trip,
                'driverOnTrip' => $driverOnTrip
            ]);
        }
    }
}
