<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Aircraft;

/*
$aircrafts = Aircraft::find(1)->aircrafts;
 
foreach ($aircrafts as $aircraft) {
    //
}
*/

class Flight extends Model
{
    use HasFactory;

    protected $fillable = [
        'aircraft_id', 'airport_departure_id', 'departure_time', 'airport_arrival_id', 'arrival_time'
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function luggages()
    {
        return $this->hasMany(Luggage::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
