<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Airport;
use App\Models\Salary;

use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    function index(){
        $max = DB::table('users')->max('id');

        $data = User::all();
        return view('dashboards.admins.index',['users'=>$data],compact('max'));
    }
    
    function profile(){
        $max = DB::table('users')->max('id');

        $data = User::all();
        return view('dashboards.admins.profile',['users'=>$data],compact('max'));
    }

    function manage_employees(){
        $max = DB::table('users')->max('id');

        $data = User::all();
        return view('dashboards.admins.manage_employees',['users'=>$data],compact('max'));
    }
    function manage_airports(){
        $max = DB::table('users')->max('id');

        $data = User::all();
        return view('dashboards.admins.manage_airports',['users'=>$data],compact('max'));
    }
    function manage_aircrafts(){
        $max = DB::table('users')->max('id');

        $data = User::all();
        return view('dashboards.admins.manage_aircrafts',['users'=>$data],compact('max'));
    }
    function manage_salaries(){
        $max = DB::table('users')->max('id');

        $data = User::all();
        return view('dashboards.admins.manage_salaries',['users'=>$data],compact('max'));
    }
    function schedule_flights(){
        $max = DB::table('users')->max('id');

        $data = User::all();
        return view('dashboards.admins.schedule_flights',['users'=>$data],compact('max'));
    }
    function schedule_works(){
        $max = DB::table('users')->max('id');

        $data = User::all();
        return view('dashboards.admins.schedule_works',['users'=>$data],compact('max'));
    }
    function message_offices(){
        $max = DB::table('users')->max('id');

        $data = User::all();
        return view('dashboards.admins.message_offices',['users'=>$data],compact('max'));
    }
}
