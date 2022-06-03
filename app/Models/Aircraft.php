<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aircraft extends Model
{
    use HasFactory;

    protected $fillable = [
        'model', 'number_of_seats_economic', 'number_of_seats_bisness', 'number_of_seats_first'
    ];

    public function flights()
    {
        return $this->hasMany(Flight::class);
    }
}
