<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HarmonogramController extends Controller
{
    public function show() {
        return view('harmonogram');
    }
}
