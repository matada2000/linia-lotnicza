<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Flight;



class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'price', 'class', 'complaint', 'seat_number', 'user_id', 'flight_id'
    ];
}
