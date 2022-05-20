<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Airport;
use App\Models\User;

class AirportController extends Controller
{
    public function index() {
        $airports = Airport::all();
        $users = User::all();

        return view('dashboards.admins.manage_airports',['airports' => $airports],['users' => $users]);
        
    }

    public function edit(Airport $airport)
    {
        $users = User::all();

        return view('dashboards.admins.edits.manage_airports',['airport' => $airport],['users' => $users]);
    }

    public function update(Airport $airport)
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

}
