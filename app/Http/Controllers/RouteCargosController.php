<?php

namespace App\Http\Controllers;

use App\Models\Cargo;
use App\Models\Route;
use Illuminate\Http\Request;

class RouteCargosController extends Controller
{
    public function show(string $id)
    {
        $cargo = Cargo::findOrFail($id);

        // Получаем рейс для данного груза
        if ($cargo->trip) {
            $trip = $cargo->trip;
            $cargoRoute = $trip->route()->first(); // Получаем первый объект маршрута

            return view('cargos_on_route', [
                'cargo' => $cargo,
                'cargoRoute' => $cargoRoute,
            ]);
        }
    }

}
