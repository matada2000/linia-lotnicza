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
        Schema::table('flights', function (Blueprint $table) {
            $table->unsignedBigInteger('airport_departure_id')->nullable;
            $table->foreign('airport_departure_id')->references('id')->on('airports');
            $table->unsignedBigInteger('airport_arrival_id')->nullable;
            $table->foreign('airport_arrival_id')->references('id')->on('airports');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('flights', function (Blueprint $table) {
            $table->dropForeign('flights_airports_departure_id_foreign');
            $table->dropColumn('airport_departure_id');
            $table->dropForeign('flights_airports_arrival_id_foreign');
            $table->dropColumn('airport_arrival_id');
        });
    }
};
