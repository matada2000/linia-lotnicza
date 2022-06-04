<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            #$table->foreignID('users_id')->references('id')->on('users');
            #$table->foreignID('luggages_id')->references('id')->on('luggages');
            #$table->foreignID('tickets_id')->references('id')->on('tickets');
            #$table->foreignID('aircrafts_id')->references('id')->on('planes');
            #$table->foreignID('airports_departure_id')->references('id')->on('airports');
            #$table->foreignID('airports_arrival_id')->references('id')->on('airports');
            $table->integer('price');
            $table->integer('available_seat_economic')->nullable();
            $table->integer('available_seat_bisness')->nullable();
            $table->integer('available_seat_first')->nullable();
            $table->timestamp('departure_time')->nullable();
            $table->timestamp('arrival_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flights');
    }
};
