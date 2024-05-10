<?php

use App\Http\Controllers\TransportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteCargosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello',function (){
   return view('hello', ['title' => 'Привет, мир!']);
});

Route::get('/transport',[TransportController::class, 'index']);
Route::get('/cargoes', [\App\Http\Controllers\CargoController::class, 'index']);
Route::get('/trip_cargoes/{id}', [\App\Http\Controllers\CargoController::class, 'show']);
Route::get('/trips', [\App\Http\Controllers\TripController::class, 'index']);
Route::get('/trip_transports/{id}', [\App\Http\Controllers\TripController::class, 'show']);

Route::get('/driver_on_trip/{id}', [\App\Http\Controllers\TripDriver::class, 'show'])->name('driver_on_trip');
Route::get('/cargos_on_route/{id}', [\App\Http\Controllers\RouteCargosController::class, 'show'])->name('cargos_on_route');


