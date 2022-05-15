<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;

class TicketController extends Controller
{
    function getData()
    {
        return Ticket::all();
    }
    public function index() {
        return view('tickets', [
        'tickets' => Ticket::all()
        ]);
    }
}
