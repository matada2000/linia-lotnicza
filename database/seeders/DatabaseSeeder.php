<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'description' => 'Admin',
            'email_verified_at' => now(),
            'password' => Hash::make('adminadmin'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'remember_token' => Str::random(10),
        ]);
        DB::table('users')->insert([
            'name' => 'user',
            'surname' => 'user',
            'email' => 'user@user.com',
            'role' => 2,
            'description' => 'User',
            'email_verified_at' => now(),
            'password' => Hash::make('useruser'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'remember_token' => Str::random(10),
        ]);
        DB::table('users')->insert([
            'name' => 'empl',
            'surname' => 'empl',
            'email' => 'empl@empl.com',
            'role' => 3,
            'description' => 'Employee',
            'email_verified_at' => now(),
            'password' => Hash::make('emplempl'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'remember_token' => Str::random(10),
        ]);


        DB::table('users')->insert([
            'name' => 'Jan',
            'surname' => 'Kowalski',
            'email' => 'JanKowalski@gmail.com',
            'role' => 3,
            'description' => 'Pilot',
            'email_verified_at' => now(),
            'password' => Hash::make('JanKowalski'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'remember_token' => Str::random(10),
        ]);
        DB::table('users')->insert([
            'name' => 'Piotr',
            'surname' => 'Nowak',
            'email' => 'PiotrNowak@gmail.com',
            'role' => 3,
            'description' => 'Pilot',
            'email_verified_at' => now(),
            'password' => Hash::make('PiotrNowak'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'remember_token' => Str::random(10),
        ]);
        DB::table('users')->insert([
            'name' => 'Anna',
            'surname' => 'Wiśniewska',
            'email' => 'AnnaWisniewska@gmail.com',
            'role' => 3,
            'description' => 'Pilot',
            'email_verified_at' => now(),
            'password' => Hash::make('AnnaWisniewska'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'remember_token' => Str::random(10),
        ]);
        DB::table('users')->insert([
            'name' => 'Janusz',
            'surname' => 'Wójcik',
            'email' => 'JanuszWojcik@gmail.com',
            'role' => 3,
            'description' => 'Pilot',
            'email_verified_at' => now(),
            'password' => Hash::make('JanuszWojcik'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'remember_token' => Str::random(10),
        ]);
        DB::table('users')->insert([
            'name' => 'Magda',
            'surname' => 'Lewandowska',
            'email' => 'MagdaLewandowska@gmail.com',
            'role' => 3,
            'description' => 'Stewardessa',
            'email_verified_at' => now(),
            'password' => Hash::make('MagdaLewandowska'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'remember_token' => Str::random(10),
        ]);
        DB::table('users')->insert([
            'name' => 'Emilia',
            'surname' => 'Zielińska',
            'email' => 'EmiliaZielinska@gmail.com',
            'role' => 3,
            'description' => 'Stewardessa',
            'email_verified_at' => now(),
            'password' => Hash::make('EmiliaZielinska'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'remember_token' => Str::random(10),
        ]);
        DB::table('users')->insert([
            'name' => 'Marcin',
            'surname' => 'Szymański',
            'email' => 'MarcinSzymanski@gmail.com',
            'role' => 3,
            'description' => 'Stewardess',
            'email_verified_at' => now(),
            'password' => Hash::make('MarcinSzymanski'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'remember_token' => Str::random(10),
        ]);
        DB::table('users')->insert([
            'name' => 'Anna',
            'surname' => 'Kamińska',
            'email' => 'AnnaKaminska@gmail.com',
            'role' => 3,
            'description' => 'Stewardessa',
            'email_verified_at' => now(),
            'password' => Hash::make('AnnaKaminska'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'remember_token' => Str::random(10),
        ]);
        DB::table('users')->insert([
            'name' => 'Justyna',
            'surname' => 'Jop',
            'email' => 'JustynaJop@gmail.com',
            'role' => 3,
            'description' => 'Stewardessa',
            'email_verified_at' => now(),
            'password' => Hash::make('JustynaJop'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'remember_token' => Str::random(10),
        ]);
        DB::table('users')->insert([
            'name' => 'Iga',
            'surname' => 'Kowalczyk',
            'email' => 'IgaKowalczyk@gmail.com',
            'role' => 3,
            'description' => 'Stewardessa',
            'email_verified_at' => now(),
            'password' => Hash::make('IgaKowalczyk'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'remember_token' => Str::random(10),
        ]);

        DB::table('users')->insert([
            'name' => 'Maciej',
            'surname' => 'Stachura',
            'email' => 'MaciejStachura@gmail.com',
            'role' => 2,
            'email_verified_at' => now(),
            'password' => Hash::make('MaciejStachura'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'remember_token' => Str::random(10),
        ]);
        DB::table('users')->insert([
            'name' => 'Konrad',
            'surname' => 'Wrzesień',
            'email' => 'KonradWrzesien@gmail.com',
            'role' => 2,
            'email_verified_at' => now(),
            'password' => Hash::make('KonradWrzesien'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'remember_token' => Str::random(10),
        ]);
        DB::table('users')->insert([
            'name' => 'Mateusz',
            'surname' => 'Stonoga',
            'email' => 'MateuszStonoga@gmail.com',
            'role' => 2,
            'email_verified_at' => now(),
            'password' => Hash::make('MateuszStonoga'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'remember_token' => Str::random(10),
        ]);
        DB::table('users')->insert([
            'name' => 'Elżbieta',
            'surname' => 'Gruszka',
            'email' => 'ElzbietaGruszka@gmail.com',
            'role' => 2,
            'email_verified_at' => now(),
            'password' => Hash::make('ElzbietaGruszka'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'remember_token' => Str::random(10),
        ]);
        DB::table('users')->insert([
            'name' => 'Jadwiga',
            'surname' => 'Wielka',
            'email' => 'JadwigaWielka@gmail.com',
            'role' => 2,
            'email_verified_at' => now(),
            'password' => Hash::make('JadwigaWielka'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'remember_token' => Str::random(10),
        ]);
        DB::table('users')->insert([
            'name' => 'Dariusz',
            'surname' => 'Brzęczyszczykiewicz',
            'email' => 'DariuszBrzeczyszczykiewicz@gmail.com',
            'role' => 2,
            'email_verified_at' => now(),
            'password' => Hash::make('JadwigaWielka'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'remember_token' => Str::random(10),
        ]);
        DB::table('users')->insert([
            'name' => 'Witold',
            'surname' => 'Buksa',
            'email' => 'WitoldBuksa@gmail.com',
            'role' => 2,
            'email_verified_at' => now(),
            'password' => Hash::make('WitoldBuksa'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'remember_token' => Str::random(10),
        ]);
        DB::table('users')->insert([
            'name' => 'Józef',
            'surname' => 'Wojciechowski',
            'email' => 'JozefWojciechowski@gmail.com',
            'role' => 2,
            'email_verified_at' => now(),
            'password' => Hash::make('JozefWojciechowski'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'remember_token' => Str::random(10),
        ]);
        DB::table('users')->insert([
            'name' => 'Kamil',
            'surname' => 'Zieliński',
            'email' => 'KamilZielinski@gmail.com',
            'role' => 2,
            'email_verified_at' => now(),
            'password' => Hash::make('KamilZielinski'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'remember_token' => Str::random(10),
        ]);
        DB::table('users')->insert([
            'name' => 'Maria',
            'surname' => 'Zielińska',
            'email' => 'MariaZielinska@gmail.com',
            'role' => 2,
            'email_verified_at' => now(),
            'password' => Hash::make('MariaZielinska'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'remember_token' => Str::random(10),
        ]);


        //\App\Models\User::factory(100)->create();

        //aircrafts
        DB::table('aircraft')->insert([
            'model' => 'Boeing 747',
            'number_of_seats_economic' => 216,
            'number_of_seats_bisness' => 100,
            'number_of_seats_first' => 50,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('aircraft')->insert([
            'model' => 'Boeing 737',
            'number_of_seats_economic' => 62,
            'number_of_seats_bisness' => 42,
            'number_of_seats_first' => 20,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('aircraft')->insert([
            'model' => 'Airbus A330',
            'number_of_seats_economic' => 113,
            'number_of_seats_bisness' => 82,
            'number_of_seats_first' => 52,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('aircraft')->insert([
            'model' => 'Embraer 195',
            'number_of_seats_economic' => 62,
            'number_of_seats_bisness' => 38,
            'number_of_seats_first' => 12,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('aircraft')->insert([
            'model' => 'Boeing 787-8 Dreamliner',
            'number_of_seats_economic' => 140,
            'number_of_seats_bisness' => 80,
            'number_of_seats_first' => 32,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('aircraft')->insert([
            'model' => 'Boeing 737-8 MAX',
            'number_of_seats_economic' => 106,
            'number_of_seats_bisness' => 50,
            'number_of_seats_first' => 30,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('aircraft')->insert([
            'model' => 'Embraer 170',
            'number_of_seats_economic' => 46,
            'number_of_seats_bisness' => 20,
            'number_of_seats_first' => 10,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('aircraft')->insert([
            'model' => 'Embraer 175',
            'number_of_seats_economic' => 56,
            'number_of_seats_bisness' => 22,
            'number_of_seats_first' => 10,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('aircraft')->insert([
            'model' => 'Boeing 787-9 Dreamliner',
            'number_of_seats_economic' => 180,
            'number_of_seats_bisness' => 80,
            'number_of_seats_first' => 34,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        //airports
        DB::table('airports')->insert([
            'name' => 'Lotnisko Chopina w Warszawie',
            'country' => 'Poland',
            'city' => 'Warsaw',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('airports')->insert([
            'name' => 'Port lotniczy Kraków-Balice im. Jana Pawła II',
            'country' => 'Poland',
            'city' => 'Cracow',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('airports')->insert([
            'name' => 'Port lotniczy Gdańsk-Rębiechowo im. Lecha Wałęsy',
            'country' => 'Poland',
            'city' => 'Gdansk',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('airports')->insert([
            'name' => 'Międzynarodowy Port Lotniczy Katowice w Pyrzowicach (Katowice Airport)',
            'country' => 'Poland',
            'city' => 'Katowice',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('airports')->insert([
            'name' => 'Port lotniczy Wrocław-Strachowice im. Mikołaja Kopernika',
            'country' => 'Poland',
            'city' => 'Wroclaw',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        /*
        DB::table('airports')->insert([
            'name' => 'Port lotniczy Warszawa-Modlin',
            'country' => 'Poland',
            'city' => 'Warsaw',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        */
        DB::table('airports')->insert([
            'name' => 'Port lotniczy Poznań-Ławica im. Henryka Wieniawskiego',
            'country' => 'Poland',
            'city' => 'Poznan',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('airports')->insert([
            'name' => 'Port lotniczy Rzeszów-Jasionka',
            'country' => 'Poland',
            'city' => 'Rzeszow',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('airports')->insert([
            'name' => 'Port lotniczy Szczecin-Goleniów im. NSZZ Solidarność',
            'country' => 'Poland',
            'city' => 'Szczecin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('airports')->insert([
            'name' => 'Port Lotniczy im. Ignacego Jana Paderewskiego Bydgoszcz',
            'country' => 'Poland',
            'city' => 'Bydgoszcz',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('airports')->insert([
            'name' => 'Port lotniczy Lublin',
            'country' => 'Poland',
            'city' => 'Lublin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('airports')->insert([
            'name' => 'Port lotniczy Łódź im. Władysława Reymonta',
            'country' => 'Poland',
            'city' => 'Lodz',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('airports')->insert([
            'name' => 'Port lotniczy Olsztyn-Mazury',
            'country' => 'Poland',
            'city' => 'Olsztyn',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        
        /*
        DB::table('airports')->insert([
            'name' => 'Hartsfield-Jackson Atlanta International Airport',
            'country' => 'USA',
            'city' => 'Atlanta',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('airports')->insert([
            'name' => 'Rhein-Main-Flughafen',
            'country' => 'Germany',
            'city' => 'Frankfurt',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('airports')->insert([
            'name' => 'London Heathrow Airport',
            'country' => 'UK',
            'city' => 'London',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('airports')->insert([
            'name' => 'Dubai International Airport',
            'country' => 'UAE',
            'city' => 'Dubai',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('airports')->insert([
            'name' => 'Los Angeles International Airport',
            'country' => 'USA',
            'city' => 'Los Angeles',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('airports')->insert([
            'name' => 'O Hare International Airport',
            'country' => 'USA',
            'city' => 'Chicago',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('airports')->insert([
            'name' => 'Aéroport Roissy-Charles-de-Gaulle',
            'country' => 'France',
            'city' => 'Paris',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('airports')->insert([
            'name' => 'Luchthaven Schiphol',
            'country' => 'Netherlands',
            'city' => 'Amsterdam',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('airports')->insert([
            'name' => 'Atatürk Havalimani',
            'country' => 'Turkey',
            'city' => 'Istanbul',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('airports')->insert([
            'name' => 'Aeroporti Ndërkombëtar i Tiranës Nënë Tereza',
            'country' => 'Albania',
            'city' => 'Tirana',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        */

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
        /*DB::table('salaries')->insert([
            'ammount' => 7500,
            'user_id' => 2,
            'period_from' => '2022-05-01',
            'period_to' => '2022-06-01',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        DB::table('salaries')->insert([
            'ammount' => 5000,
            'user_id' => 3,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);*/
    }
}