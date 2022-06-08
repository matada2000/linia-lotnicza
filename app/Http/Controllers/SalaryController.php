<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Salary;
use App\Models\User;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('salaries', ['salaries' => Salary::all()]);
        $users = User::all();
        $salaries = Salary::all();
        $max = DB::table('users')->max('id');

        return view('dashboards.admins.manage_salaries',compact('max','users', 'salaries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        //$salaries = Salary::all();
        $max = DB::table('users')->max('id');

        return view('dashboards.admins.creates.manage_salaries',['users' => $users],compact('max'));
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
            'ammount' => 'required',
            'period_from' => 'required',
            'period_to' => 'required',
            'user_id' => 'required',
        ]);

        Salary::create([
            'ammount' => request('ammount'),
            'period_from' => request('period_from'),
            'period_to' => request('period_to'),
            'user_id' => request('user_id'),
        ]);

        return redirect('/admin/manage_salaries');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function show(Salary $salary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function edit(Salary $salary)
    {
        $users = User::all();
        $max = DB::table('users')->max('id');

        $dt1 = \DateTime::createFromFormat('Y-m-d', $salary->period_from);
        $date1 = $dt1->format('Y-m-d');

        $dt2 = \DateTime::createFromFormat('Y-m-d', $salary->period_to);
        $date2 = $dt2->format('Y-m-d');

        return view('dashboards.admins.edits.manage_salaries',compact('max','users','salary','date1','date2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Salary $salary)
    {
        request()->validate([
            'ammount' => 'required',
            'period_from' => 'required',
            'period_to' => 'required',
            'user_id' => 'required',
        ]);
        
        $salary->update([
            'ammount' => request('ammount'),
            'period_from' => request('period_from'),
            'period_to' => request('period_to'),
            'user_id' => request('user_id'),
        ]);

        return redirect('/admin/manage_salaries');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Salary  $salary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salary $salary)
    {
        $salary -> delete();

        return redirect('/admin/manage_salaries');
    }
}
