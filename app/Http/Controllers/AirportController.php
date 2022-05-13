<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Airport;

class AirportController extends Controller
{
    function getData()
    {
        return Airport::all();
    }
}
