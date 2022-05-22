<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Airport;

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
}
