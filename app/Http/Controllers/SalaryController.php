<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salary;

class SalaryController extends Controller
{
    function getData()
    {
        return Salary::all();
    }
    public function index() {
        return view('salaries', [
        'salaries' => Salary::all()
        ]);
    }
}
