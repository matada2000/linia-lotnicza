<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aircraft;

class AircraftController extends Controller
{
    function getData()
    {
        return Aircraft::all();
    }
    public function index() {
        return view('aircrafts', [
        'aircrafts' => Aircraft::all()
        ]);
    }
}
