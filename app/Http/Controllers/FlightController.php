<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Airport;
use App\Models\Aircraft;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class FlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$flights = Flight::all();
        $users = User::all();
        $max = DB::table('users')->max('id');

        //SELECT s.model, l.name, d.name FROM flights AS f JOIN aircraft AS s ON f.aircraft_id = s.id JOIN airports AS l ON f.airport_departure_id = l.id JOIN airports AS d ON f.airport_arrival_id = d.id;

        $flights = DB::table('flights')
        ->join('aircraft','flights.aircraft_id', '=', 'aircraft.id')
        ->join('airports AS d','flights.airport_departure_id', '=', 'd.id')
        ->join('airports AS f','flights.airport_arrival_id', '=', 'f.id')
        ->select('flights.id','aircraft.model','d.name as o','flights.departure_time','f.name as p','flights.arrival_time','flights.created_at','flights.updated_at')
        ->get();

        return view('dashboards.admins.schedule_flights',compact('max','users','flights'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $aircrafts = Aircraft::all();
        $airports = Airport::orderBy('name','ASC')->get();
        $max = DB::table('users')->max('id');
        
        

        return view('dashboards.admins.creates.schedule_flights',compact('users','max','aircrafts','airports'));
    }

    public function create2(Request $request)
    {
        $users = User::all();
        $aircrafts = Aircraft::all();
        $airports = Airport::orderBy('name','ASC')->get();
        $max = DB::table('users')->max('id');
        
        $data = $request->input('aircraft_id');
        

        return view('dashboards.admins.creates.creates2.schedule_flights',compact('users','max','aircrafts','airports','data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store2(Request $request)
    {
        $data = $request->input('aircraft_id');

        return redirect('/admin/schedule_flights/create');
    }

    public function store(Request $request)
    {
        

        request()->validate([
            'aircraft_id' => 'required',
            'airport_departure_id' => 'required',
            'departure_time' => 'required',
            'airport_arrival_id' => 'required',
            'arrival_time' => 'required',
            'price' => 'required',
            'available_seat_economic' => 'required',
            'available_seat_bisness' => 'required',
            'available_seat_first' => 'required',
        ]);

        Flight::create([
            'aircraft_id' => request('aircraft_id'),
            'airport_departure_id' => request('airport_departure_id'),
            'departure_time' => request('departure_time'),
            'airport_arrival_id' => request('airport_arrival_id'),
            'arrival_time' => request('arrival_time'),
            'price' => request('price'),
            'available_seat_economic' => request('available_seat_economic'),
            'available_seat_bisness' => request('available_seat_bisness'),
            'available_seat_first' => request('available_seat_first'),
        ]);

        return redirect('/admin/schedule_flights');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function show(Flight $flight)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function edit(Flight $flight)
    {
        $users = User::all();
        $aircrafts = Aircraft::all();
        $airports = Airport::orderBy('name','ASC')->get();
        $max = DB::table('users')->max('id');

        $dt1 = \DateTime::createFromFormat('Y-m-d H:i:s', $flight->departure_time);
        $date1 = $dt1->format('Y-m-d\TH:i:s');

        $dt2 = \DateTime::createFromFormat('Y-m-d H:i:s', $flight->arrival_time);
        $date2 = $dt2->format('Y-m-d\TH:i:s');

        return view('dashboards.admins.edits.schedule_flights',compact('users','max','aircrafts','airports','flight','date1','date2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Flight $flight)
    {
        request()->validate([
            'aircraft_id' => 'required',
            'airport_departure_id' => 'required',
            'departure_time' => 'required',
            'airport_arrival_id' => 'required',
            'arrival_time' => 'required',
            'price' => 'required',
            'available_seat_economic' => 'required',
            'available_seat_bisness' => 'required',
            'available_seat_first' => 'required',
        ]);

        $flight->update([
            'aircraft_id' => request('aircraft_id'),
            'airport_departure_id' => request('airport_departure_id'),
            'departure_time' => request('departure_time'),
            'airport_arrival_id' => request('airport_arrival_id'),
            'arrival_time' => request('arrival_time'),
            'price' => request('price'),
            'available_seat_economic' => request('available_seat_economic'),
            'available_seat_bisness' => request('available_seat_bisness'),
            'available_seat_first' => request('available_seat_first'),
        ]);

        return redirect('/admin/schedule_flights');
    }


    public function add_employee(Flight $flight)
    {
        
        $users = User::all();
        $max = DB::table('users')->max('id');
        $flights = DB::table('flights')
        ->join('aircraft','flights.aircraft_id', '=', 'aircraft.id')
        ->join('airports AS d','flights.airport_departure_id', '=', 'd.id')
        ->join('airports AS f','flights.airport_arrival_id', '=', 'f.id')
        ->select('flights.id','aircraft.model','d.name as o','flights.departure_time','f.name as p','flights.arrival_time','flights.created_at','flights.updated_at')
        ->get();

        return view('dashboards.admins.edits.add_employee',compact('users','max','flight'));
    }

    public function add_employee_2(Flight $flight)
    {
        
        $users = User::all();
        $max = DB::table('users')->max('id');
        $flights = DB::table('flights')
        ->join('aircraft','flights.aircraft_id', '=', 'aircraft.id')
        ->join('airports AS d','flights.airport_departure_id', '=', 'd.id')
        ->join('airports AS f','flights.airport_arrival_id', '=', 'f.id')
        ->select('flights.id','aircraft.model','d.name as o','flights.departure_time','f.name as p','flights.arrival_time','flights.created_at','flights.updated_at')
        ->get();

        return view('dashboards.admins.edits.add_employee',compact('users','max','flight'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Flight  $flight
     * @return \Illuminate\Http\Response
     */
    public function destroy(Flight $flight)
    {
        $flight -> delete();

        return redirect('/admin/schedule_flights');
    }
}
