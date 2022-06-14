<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Airport;
use App\Models\Aircraft;
use App\Models\Flight_User;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class Flight_UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $max = DB::table('users')->max('id');
        $aircrafts = Aircraft::all();
        $airports = Airport::all();

        //SELECT s.model, l.name, d.name FROM flights AS f JOIN aircraft AS s ON f.aircraft_id = s.id JOIN airports AS l ON f.airport_departure_id = l.id JOIN airports AS d ON f.airport_arrival_id = d.id;

        $pracas = DB::table('flight__users')
        ->join('flights','flight__users.flight_id', '=', 'flights.id')
        ->join('users','flight__users.user_id', '=', 'users.id')
        ->select('flight__users.id','flight__users.created_at','flight__users.updated_at','users.name','users.surname','users.description','flights.departure_time','flights.arrival_time','flights.airport_departure_id','flights.airport_arrival_id','flights.aircraft_id')
        ->paginate(3);

        return view('dashboards.admins.schedule_works',compact('max','users','pracas','aircrafts','airports'));
    }

    public function create()
    {
        $users = User::all();
        $employees = User::where('role', '=', 3)->orderBy('description','ASC')->get();

        $max = DB::table('users')->max('id');
        $flights = Flight::all();
        

        return view('dashboards.admins.creates.schedule_works',compact('max','employees','flights','users'));
    }

    public function store()
    {
        request()->validate([
            'user_id' => 'required',
            'flight_id' => 'required',
        ]);

        Flight_User::create([
            'user_id' => request('user_id'),
            'flight_id' => request('flight_id'),
        ]);

        return redirect('/admin/schedule_works');
    }

    public function edit(Flight_User $praca)
    {
        $users = User::all();
        $employees = User::where('role', '=', 3)->orderBy('description','ASC')->get();

        $max = DB::table('users')->max('id');
        $flights = Flight::all();

        return view('dashboards.admins.edits.schedule_works',compact('users','max','employees','flights','praca'));
    }

    public function update(Request $request, Flight_User $praca)
    {
        request()->validate([
            'user_id' => 'required',
            'flight_id' => 'required',
        ]);

        $praca->update([
            'user_id' => request('user_id'),
            'flight_id' => request('flight_id'), 
        ]);

        return redirect('/admin/schedule_works');
    }

    public function destroy(Flight_User $praca)
    {
        $praca -> delete();

        return redirect('/admin/schedule_works');
    }
}
