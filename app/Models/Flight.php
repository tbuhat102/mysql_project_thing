<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'flight_number',
        'airline',
        'status',
        'scheduled_time',
        'origin',         
        'destination',
        'terminal',
        'gate'
    ];

    public $timestamps = false;
}
