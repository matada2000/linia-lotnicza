<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

//$salaries = User::find(1)->salary;
 
//foreach ($salaries as $salary) {
    //  
//}

class Salary extends Model
{
    use HasFactory;

    protected $fillable = [
        'ammount', 'period_from', 'period_to', 'user_id'
    ];
}
