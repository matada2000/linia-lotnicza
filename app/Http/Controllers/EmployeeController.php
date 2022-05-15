<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    function index(){

        return view('dashboards.employees.index');
    }
    
    function profile(){
           return view('dashboards.employees.profile');
    }
    function settings(){
           return view('dashboards.employees.settings');
    }
}
