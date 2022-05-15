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
    public function index() {
        return view('airports', [
        'airports' => Airport::all()
    ]);
        
    }
}
