<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightController;

Route::get('/', function () {
    return view('index');
});

Route::get('/flights', [FlightController::class, 'index'])->name('flights.index');