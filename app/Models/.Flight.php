<?php
// pwd: "airportApp/app/Models/Flight.php"

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = [
        'flight_number',
        'airline',
        'status',
        'scheduled_time',
        'origin',         // Changed from origin_destination
        'destination',    // Added new column
        'terminal',
        'gate'
    ];

    // If you're not using timestamps in your table, add:
    public $timestamps = false;
}