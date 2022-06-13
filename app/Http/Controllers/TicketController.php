<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use App\Models\Flight;
use App\Models\Aircraft;
use App\Models\Airport;
use Illuminate\Http\Request;
use PDF;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //SELECT s.model, l.name, d.name FROM flights AS f JOIN aircraft AS s ON f.aircraft_id = s.id JOIN airports AS l ON f.airport_departure_id = l.id JOIN airports AS d ON f.airport_arrival_id = d.id;

        $flights = DB::table('flights')
        ->join('aircraft','flights.aircraft_id', '=', 'aircraft.id')
        ->join('airports AS d','flights.airport_departure_id', '=', 'd.id')
        ->join('airports AS f','flights.airport_arrival_id', '=', 'f.id')
        ->select('flights.id','aircraft.model','d.name as o','flights.departure_time','f.name as p','flights.arrival_time')
        ->get();

        return view('dashboards.users.tickets',compact('flights'));
    }

    public function index2(){

        $tickets = Ticket::all();
  
        return view('dashboards.users.reservations', compact('tickets'));
      }

      public function downloadPDF($id){
        $ticket = Ticket::find($id);

        $flights = DB::table('flights')
        ->join('aircraft','flights.aircraft_id', '=', 'aircraft.id')
        ->join('airports AS d','flights.airport_departure_id', '=', 'd.id')
        ->join('airports AS f','flights.airport_arrival_id', '=', 'f.id')
        ->select('flights.id','aircraft.model','d.name as o','flights.departure_time','f.name as p','flights.arrival_time','flights.created_at','flights.updated_at')
        ->get();
  
        $pdf = PDF::loadView('dashboards.users.edits.pdf', compact('ticket','flights'));
        return $pdf->download('invoice.pdf');
  
      }

    public function list(Flight $flight)
    {  
        $aircrafts = Aircraft::all();
        $airports = Airport::all();
        $tickets = Ticket::all();
        $miejsca_eko = 0;
        $miejsca_bis = 0;
        $miejsca_fir = 0;

        foreach($tickets as $ticket){
            if($ticket->flight_id == $flight->id && $ticket->class == 'economic'){
              $miejsca_eko = $miejsca_eko + 1;
            }
        }

        foreach($tickets as $ticket){
            if($ticket->flight_id == $flight->id && $ticket->class == 'bisness'){
                $miejsca_bis = $miejsca_bis + 1;
            }
        }

        foreach($tickets as $ticket){
            if($ticket->flight_id == $flight->id && $ticket->class == 'first'){
                $miejsca_fir = $miejsca_fir + 1;
            }
        }

        return view('dashboards.users.ticklist.tickets_list',compact('aircrafts','airports','flight','miejsca_eko','miejsca_bis','miejsca_fir','tickets'));
    }

    public function buy_economic(Flight $flight)
    {  
        $aircrafts = Aircraft::all();
        $airports = Airport::all();

        return view('dashboards.users.ticklist.tickclass.tickets_buy_economic',compact('aircrafts','airports','flight'));
    }

    public function buy_bisness(Flight $flight)
    {  
        $aircrafts = Aircraft::all();
        $airports = Airport::all();

        return view('dashboards.users.ticklist.tickclass.tickets_buy_bisness',compact('aircrafts','airports','flight'));
    }

    public function buy_first(Flight $flight)
    {  
        $aircrafts = Aircraft::all();
        $airports = Airport::all();

        return view('dashboards.users.ticklist.tickclass.tickets_buy_first',compact('aircrafts','airports','flight'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Flight $flight)
    {

        request()->validate([
            'class' => 'required',
            'seat_number' => 'required',
            'user_id' => 'required',
            'flight_id' => 'required',
        ]);

        Ticket::create([
            'class' => request('class'),
            'seat_number' => request('seat_number'),
            'user_id' => request('user_id'),
            'flight_id' => request('flight_id'),
        ]);

        return redirect('/user/tickets');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
