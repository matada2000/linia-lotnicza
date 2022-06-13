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

class Flight_UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $max = DB::table('users')->max('id');
        $aircrafts = Aircraft::all();
        $airports = Airport::all();

        //SELECT s.model, l.name, d.name FROM flights AS f JOIN aircraft AS s ON f.aircraft_id = s.id JOIN airports AS l ON f.airport_departure_id = l.id JOIN airports AS d ON f.airport_arrival_id = d.id;

        $pracas = DB::table('flight_user')
        ->join('flights','flight_user.flight_id', '=', 'flights.id')
        ->join('users','flight_user.user_id', '=', 'users.id')
        ->select('flight_user.created_at','flight_user.updated_at','users.name','users.surname','users.description','flights.departure_time','flights.arrival_time','flights.airport_departure_id','flights.airport_arrival_id','flights.aircraft_id')
        ->get();

        return view('dashboards.admins.schedule_works',compact('max','users','pracas','aircrafts','airports'));
    }

    public function create()
    {
        //
    }

    public function store()
    {
        //
    }
}
