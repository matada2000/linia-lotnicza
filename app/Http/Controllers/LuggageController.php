<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Luggage;

class LuggageController extends Controller
{
    function getData()
    {
        return Luggage::all();
    }
    public function index() {
        return view('luggages', [
        'luggages' => Luggage::all()
        ]);
    }
}
