<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function index()
    {
        $arriving_flights = Flight::where('status', 'arriving')
            ->orderBy('scheduled_time')
            ->get();
        
        $departing_flights = Flight::where('status', 'departing')
            ->orderBy('scheduled_time')
            ->get();

        return view('flights.index', compact('arriving_flights', 'departing_flights'));
    }
}
