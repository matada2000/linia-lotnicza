<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use Illuminate\Http\Request;
use App\Models\User;

class AirportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $airports = Airport::all();
        $users = User::all();

        return view('dashboards.admins.manage_airports',['airports' => $airports],['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();

        return view('dashboards.admins.creates.manage_airports',['users' => $users]);
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
            'country' => 'required',
            'city' => 'required',
        ]);

        Airport::create([
            'name' => request('name'),
            'country' => request('country'),
            'city' => request('city'),
        ]);

        return redirect('/admin/manage_airports');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Airport  $airport
     * @return \Illuminate\Http\Response
     */
    public function show(Airport $airport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Airport  $airport
     * @return \Illuminate\Http\Response
     */
    public function edit(Airport $airport)
    {
        $users = User::all();

        return view('dashboards.admins.edits.manage_airports',['airport' => $airport],['users' => $users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Airport  $airport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Airport $airport)
    {
        request()->validate([
            'name' => 'required',
            'country' => 'required',
            'city' => 'required',
        ]);

        $airport->update([
            'name' => request('name'),
            'country' => request('country'),
            'city' => request('city'),
        ]);

        return redirect('/admin/manage_airports');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Airport  $airport
     * @return \Illuminate\Http\Response
     */
    public function destroy(Airport $airport)
    {
        $airport -> delete();

        return redirect('/admin/manage_airports');
    }
}
