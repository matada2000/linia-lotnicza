<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Flight;

$tickets = User::find(1)->ticket;
 
foreach ($tickets as $ticket) {
    //  
}

$tickets = Flight::find(1)->ticket;
 
foreach ($tickets as $ticket) {
    //  
}

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'price', 'class', 'complaint', 'seat_number', 'user_id', 'flight_id'
    ];
}
