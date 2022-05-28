<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
        ]);
        DB::table('users')->insert([
            'name' => 'user',
            'surname' => 'user',
            'email' => 'user@user.com',
            'role' => 2,
            'password' => Hash::make('useruser'),
        ]);
        DB::table('users')->insert([
            'name' => 'empl',
            'surname' => 'empl',
            'email' => 'empl@empl.com',
            'role' => 3,
            'password' => Hash::make('emplempl'),
        ]);

        //aircrafts
        DB::table('aircraft')->insert([
            'model' => 'Boeing 747',
            'number_of_seats' => 366,
        ]);
        DB::table('aircraft')->insert([
            'model' => 'Boeing 737',
            'number_of_seats' => 124,
        ]);
        DB::table('aircraft')->insert([
            'model' => 'Airbus A330',
            'number_of_seats' => 247,
        ]);

        //airports
        DB::table('airports')->insert([
            'name' => 'Okecie',
            'country' => 'Poland',
            'city' => 'Warsaw',
        ]);
        DB::table('airports')->insert([
            'name' => 'Balice',
            'country' => 'Poland',
            'city' => 'Cracow',
        ]);
        DB::table('airports')->insert([
            'name' => 'Modlin',
            'country' => 'Poland',
            'city' => 'Warsaw',
        ]);
        
        //luggages
        DB::table('luggage')->insert([
            'type' => 'checked',
            'weight' => 10,
            'user_id' => 2,
        ]);
        DB::table('luggage')->insert([
            'type' => 'carry-on',
            'weight' => 2,
            'user_id' => 2,
        ]);

        //salaries
        DB::table('salaries')->insert([
            'ammount' => 7500,
            'user_id' => 1,
        ]);
        DB::table('salaries')->insert([
            'ammount' => 5000,
            'user_id' => 3,
        ]);
    }
}
