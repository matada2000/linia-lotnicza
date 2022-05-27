<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Airport;
use App\Models\Aircraft;

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
        ->select('flights.id','aircraft.model','d.name as o','f.name as p','flights.created_at','flights.updated_at')
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'aircraft_id' => 'required',
            'airport_departure_id' => 'required',
            'airport_arrival_id' => 'required',
        ]);

        Flight::create([
            'aircraft_id' => request('aircraft_id'),
            'airport_departure_id' => request('airport_departure_id'),
            'airport_arrival_id' => request('airport_arrival_id'),
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

        return view('dashboards.admins.edits.schedule_flights',compact('users','max','aircrafts','airports','flight'));
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
            'airport_arrival_id' => 'required',
        ]);

        $flight->update([
            'aircraft_id' => request('aircraft_id'),
            'airport_departure_id' => request('airport_departure_id'),
            'airport_arrival_id' => request('airport_arrival_id'),
        ]);

        return redirect('/admin/schedule_flights');
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
