<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\Aircraft;
use App\Models\User;
use Illuminate\Http\Request;

class AircraftController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aircrafts = Aircraft::all();
        $users = User::all();
        $max = DB::table('users')->max('id');

        return view('dashboards.admins.manage_aircrafts',compact('max','users','aircrafts'));
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

        return view('dashboards.admins.creates.manage_aircrafts',['users' => $users],compact('max'));
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
            'model' => 'required',
            'number_of_seats' => 'required',
        ]);

        Aircraft::create([
            'model' => request('model'),
            'number_of_seats' => request('number_of_seats'),
        ]);

        return redirect('/admin/manage_aircrafts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Aircraft  $aircraft
     * @return \Illuminate\Http\Response
     */
    public function show(Aircraft $aircraft)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aircraft  $aircraft
     * @return \Illuminate\Http\Response
     */
    public function edit(Aircraft $aircraft)
    {
        $users = User::all();
        $max = DB::table('users')->max('id');

        return view('dashboards.admins.edits.manage_aircrafts',compact('max','users','aircraft'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aircraft  $aircraft
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aircraft $aircraft)
    {
        request()->validate([
            'model' => 'required',
            'number_of_seats' => 'required',
        ]);

        $aircraft->update([
            'model' => request('model'),
            'number_of_seats' => request('number_of_seats'),
        ]);

        return redirect('/admin/manage_aircrafts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aircraft  $aircraft
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aircraft $aircraft)
    {
        $aircraft -> delete();

        return redirect('/admin/manage_aircrafts');
    }
}
