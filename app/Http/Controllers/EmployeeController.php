<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
    function settings(){
           return view('dashboards.employees.settings');
    }

    public function lista()
    {
        $employees = User::all();
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
