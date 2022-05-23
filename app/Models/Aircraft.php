<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aircraft extends Model
{
    use HasFactory;

    protected $fillable = [
        'model', 'number_of_seats'
    ];

    public function flights()
    {
        return $this->hasMany(Flight::class);
    }
}
