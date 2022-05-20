<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Airport;

class AdminController extends Controller
{
    function index(){
        $data = User::all();
        return view('dashboards.admins.index',['users'=>$data]);
    }
    
    function profile(){
        $data = User::all();
        return view('dashboards.admins.profile',['users'=>$data]);
    }
    function settings(){
        $data = User::all();
        return view('dashboards.admins.settings',['users'=>$data]);
    }
    function manage_employees(){
        $data = User::all();
        return view('dashboards.admins.manage_employees',['users'=>$data]);
    }
    function manage_airports(){
        $data = User::all();
        return view('dashboards.admins.manage_airports',['users'=>$data]);
    }
}
