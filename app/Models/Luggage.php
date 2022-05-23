<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Flight;

$luggages = User::find(1)->luggage;
 
foreach ($luggages as $luggage) {
    //  
}

$luggages = Flight::find(1)->luggage;
 
foreach ($luggages as $luggage) {
    //  
}

class Luggage extends Model
{
    use HasFactory;
}
