<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    function getData()
    {
        return Flight::all();
    }
    public function index() {
        return view('flights', [
        'flights' => Flight::all()
        ]);
    }
}
