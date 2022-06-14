<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Salary;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Airport;
use App\Models\Aircraft;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use Carbon\Carbon;

use Illuminate\Foundation\Auth\AuthenticatesUsers;

class EmployeeController extends Controller
{
    function index(){
        $max = DB::table('users')->max('id');

        $data = User::all();
        return view('dashboards.employees.index',['users'=>$data],compact('max'));
    }
    
    function profile(){
        $max = DB::table('users')->max('id');

        $data = User::all();
        return view('dashboards.employees.profile',['users'=>$data],compact('max'));
    }
    function salaries(){
        $max = DB::table('users')->max('id');
        $salaries = Salary::all();
        $users = User::all();
        $data = User::all();
        return view('dashboards.employees.salaries',['users'=>$data],compact('max','users', 'salaries'));
    }

    function works(){
        $max = DB::table('users')->max('id');
        $aircrafts = Aircraft::all();
        $airports = Airport::all();

        $pracas =  DB::table('flight__users')
        ->join('flights','flight__users.flight_id', '=', 'flights.id')
        ->join('users','flight__users.user_id', '=', 'users.id')
        ->whereRaw("flight__users.user_id = '".Auth()->user()->id."'")
        ->select(\DB::raw('
        DATE_FORMAT(flights.departure_time, "%Y.%m.%d %W") as data, 
        flight__users.user_id as idu, 
        DATE_FORMAT(flights.departure_time, "%H:%i") as od_time, 
        DATE_FORMAT(flights.arrival_time, "%H:%i") as do_time, 
        flights.airport_departure_id, 
        flights.airport_arrival_id, 
        flights.aircraft_id 
        '))
        ->orderBy('flights.departure_time','ASC')->get();

        $zmienna = 0;

        $users = User::all();
        $data = User::all();
        return view('dashboards.employees.schedule_works',compact('max','users', 'pracas','data','zmienna','aircrafts','airports'));
    }


    public function lista()
    {
        $employees = User::where('role', '=', 3)->paginate(8);
        $users = User::all();
        $max = DB::table('users')->max('id');

        return view('dashboards.admins.manage_employees',compact('max','users','employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $max = DB::table('users')->max('id');

        return view('dashboards.admins.creates.manage_employees',['users' => $users],compact('max'));
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
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'role' => 'required',
            'description' => 'required',
            'password' => 'required',
        ]);

        User::create([
            'name' => request('name'),
            'surname' => request('surname'),
            'email' => request('email'),
            'role' => request('role'),
            'description' => request('description'),
            'password' => Hash::make(request('password')),
        ]);

        return redirect('/admin/manage_employees');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Airport  $airport
     * @return \Illuminate\Http\Response
     */
    public function show(User $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Airport  $airport
     * @return \Illuminate\Http\Response
     */
    public function edit(User $employee)
    {
        $users = User::all();
        $max = DB::table('users')->max('id');

        return view('dashboards.admins.edits.manage_employees',compact('employee','users','max'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Airport  $airport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $employee)
    {
        request()->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'role' => 'required',
            'description' => 'required',
            'password' => 'required',
        ]);

        $employee->update([
            'name' => request('name'),
            'surname' => request('surname'),
            'email' => request('email'),
            'role' => request('role'),
            'description' => request('description'),
            'password' => Hash::make(request('password')),
        ]);

        return redirect('/admin/manage_employees');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $employee)
    {
        $employee -> delete();

        return redirect('/admin/manage_employees');
    }
}
