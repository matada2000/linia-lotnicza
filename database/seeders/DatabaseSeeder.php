<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //users
        DB::table('users')->insert([
            'name' => 'admin',
            'surname' => 'admin',
            'email' => 'admin@admin.com',
            'role' => 1,
            'password' => Hash::make('adminadmin'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => 'user',
            'surname' => 'user',
            'email' => 'user@user.com',
            'role' => 2,
            'password' => Hash::make('useruser'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => 'empl',
            'surname' => 'empl',
            'email' => 'empl@empl.com',
            'role' => 3,
            'password' => Hash::make('emplempl'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        //aircrafts
        DB::table('aircraft')->insert([
            'model' => 'Boeing 747',
            'number_of_seats_economic' => 122,
            'number_of_seats_bisness' => 122,
            'number_of_seats_first' => 122,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('aircraft')->insert([
            'model' => 'Boeing 737',
            'number_of_seats_economic' => 42,
            'number_of_seats_bisness' => 42,
            'number_of_seats_first' => 42,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('aircraft')->insert([
            'model' => 'Airbus A330',
           'number_of_seats_economic' => 82,
            'number_of_seats_bisness' => 82,
            'number_of_seats_first' => 82,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        //airports
        DB::table('airports')->insert([
            'name' => 'Okecie',
            'country' => 'Poland',
            'city' => 'Warsaw',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('airports')->insert([
            'name' => 'Balice',
            'country' => 'Poland',
            'city' => 'Cracow',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('airports')->insert([
            'name' => 'Modlin',
            'country' => 'Poland',
            'city' => 'Warsaw',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        //luggages
        DB::table('luggage')->insert([
            'type' => 'checked',
            'weight' => 10,
            'user_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('luggage')->insert([
            'type' => 'carry-on',
            'weight' => 2,
            'user_id' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        //salaries
        DB::table('salaries')->insert([
            'ammount' => 7500,
            'user_id' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('salaries')->insert([
            'ammount' => 5000,
            'user_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
