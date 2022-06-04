<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AirportController;
use App\Http\Controllers\AircraftController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\LuggageController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\ProfileController;






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/test', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('landing');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/harmonogram',[App\Http\Controllers\HarmonogramController::class, 'show']);

//Route::get('airports',[AirportController::class,'getData']);
Route::get('/airports',[App\Http\Controllers\AirportController::class, 'index']);
//Route::get('/airports/{airport}/edit',[App\Http\Controllers\AirportController::class, 'edit']);

//Route::get('aircrafts',[AircraftController::class,'getData']);
Route::get('/aircrafts',[App\Http\Controllers\AircraftController::class, 'index']);

//Route::get('tickets',[TicketController::class,'getData']);
Route::get('/tickets',[App\Http\Controllers\TicketController::class, 'index']);

//Route::get('salaries',[SalaryController::class,'getData']);
Route::get('/salaries',[App\Http\Controllers\SalaryController::class, 'index']);

//Route::get('luggages',[LuggageController::class,'getData']);
Route::get('/luggages',[App\Http\Controllers\LuggageController::class, 'index']);

//Route::get('flights',[FlightController::class,'getData']);
Route::get('/flights',[App\Http\Controllers\FlightController::class, 'index']);


Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth']], function(){
    Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');

    // Employees
    Route::get('manage_employees',[AdminController::class,'manage_employees'])->name('admin.manage_employees');
    Route::get('manage_employees',[EmployeeController::class,'lista'])->name('admin.manage_employees');
    Route::get('manage_employees/{employee}/edit',[EmployeeController::class, 'edit']);
    Route::put('manage_employees/{employee}',[EmployeeController::class, 'update']);
    Route::get('manage_employees/create',[EmployeeController::class, 'create']);
    Route::post('manage_employees',[EmployeeController::class, 'store']);
    Route::delete('manage_employees/{employee}',[EmployeeController::class,'destroy']);

    //Profile
    Route::get('profiles',[ProfileController::class,'lista'])->name('admin.profiles');
    Route::get('profiles/{profile}/edit',[ProfileController::class, 'edit']);
    Route::put('profiles/{profile}',[ProfileController::class, 'update']);
    Route::post('profiles',[ProfileController::class, 'store']);


    // Airports
    Route::get('manage_airports',[AirportController::class, 'index'])->name('admin.manage_airports');
    Route::get('manage_airports/{airport}/edit',[AirportController::class, 'edit']);
    Route::put('manage_airports/{airport}',[AirportController::class, 'update']);
    Route::get('manage_airports/create',[AirportController::class, 'create']);
    Route::post('manage_airports',[AirportController::class, 'store']);
    Route::delete('manage_airports/{airport}',[AirportController::class,'destroy']);

    //Aircrafts
    Route::get('manage_aircrafts',[AdminController::class,'manage_aircrafts'])->name('admin.manage_aircrafts');
    Route::get('manage_aircrafts',[AircraftController::class,'index'])->name('admin.manage_aircrafts');
    Route::get('manage_aircrafts/{aircraft}/edit',[AircraftController::class, 'edit']);
    Route::put('manage_aircrafts/{aircraft}',[AircraftController::class, 'update']);
    Route::get('manage_aircrafts/create',[AircraftController::class, 'create']);
    Route::post('manage_aircrafts',[AircraftController::class, 'store']);
    Route::delete('manage_aircrafts/{aircraft}',[AircraftController::class,'destroy']);

    //Schedule works
    Route::get('schedule_works',[AdminController::class,'schedule_works'])->name('admin.schedule_works');

    //Schedule flights
    Route::get('schedule_flights',[AdminController::class,'schedule_flights'])->name('admin.schedule_flights');
    Route::get('schedule_flights',[FlightController::class,'index'])->name('admin.schedule_flights');
    Route::get('schedule_flights/{flight}/edit',[FlightController::class, 'edit']);
    Route::put('schedule_flights/{flight}',[FlightController::class, 'update']);
    Route::get('schedule_flights/create',[FlightController::class, 'create']);
    Route::get('schedule_flights/create/create',[FlightController::class, 'create2']);
    Route::post('schedule_flights/create',[FlightController::class, 'store2']);
    Route::post('schedule_flights',[FlightController::class, 'store']);
    Route::delete('schedule_flights/{flight}',[FlightController::class,'destroy']);

    //Poczta
    Route::get('message_offices',[AdminController::class,'message_offices'])->name('admin.message_offices');

});

Route::group(['prefix'=>'user', 'middleware'=>['isUser','auth']], function(){
    Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
    Route::get('profile',[UserController::class,'profile'])->name('user.profile');

    //Tickets
    Route::get('ticket',[UserController::class,'ticket'])->name('user.tickets');
    Route::get('ticket',[TicketController::class,'index'])->name('user.tickets');
    Route::get('tickets_list/{flight}/tickets',[TicketController::class,'list']);
    Route::get('tickets_list/{flight}/tickets/tickets_buy_economic',[TicketController::class,'buy_economic']);
    Route::get('tickets_list/{flight}/tickets/tickets_buy_bisness',[TicketController::class,'buy_bisness']);
    Route::get('tickets_list/{flight}/tickets/tickets_buy_first',[TicketController::class,'buy_first']);

    //Reservations
    Route::get('reservation',[UserController::class,'reservation'])->name('user.reservations');

});

Route::group(['prefix'=>'employee', 'middleware'=>['isEmployee','auth']], function(){
    Route::get('dashboard',[EmployeeController::class,'index'])->name('employee.dashboard');
    Route::get('profile',[EmployeeController::class,'profile'])->name('employee.profile');
    Route::get('settings',[EmployeeController::class,'settings'])->name('employee.settings');

});

