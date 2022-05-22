<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function lista()
    {
        $profiles = User::all();
        $users = User::all();
        $max = DB::table('users')->max('id');

        return view('dashboards.admins.profiles',compact('max','users','profiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

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
            'password' => 'required',
        ]);

        User::create([
            'name' => request('name'),
            'surname' => request('surname'),
            'email' => request('email'),
            'role' => request('role'),
            'password' => Hash::make(request('password')),
        ]);

        return redirect('/admin/profiles');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Airport  $airport
     * @return \Illuminate\Http\Response
     */
    public function show(User $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Airport  $airport
     * @return \Illuminate\Http\Response
     */
    public function edit(User $profile)
    {
        $users = User::all();
        $max = DB::table('users')->max('id');

        return view('dashboards.admins.edits.profiles',compact('profile','users','max'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Airport  $airport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $profile)
    {
        request()->validate([
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'role' => 'required',
            'password' => 'required',
        ]);

        $profile->update([
            'name' => request('name'),
            'surname' => request('surname'),
            'email' => request('email'),
            'role' => request('role'),
            'password' => Hash::make(request('password')),
        ]);

        return redirect('/admin/profiles');
    }
}
