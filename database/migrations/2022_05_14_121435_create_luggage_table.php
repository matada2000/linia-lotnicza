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
        Schema::create('luggage', function (Blueprint $table) {
            $table->id();
            #$table->foreignID('users_id')->references('id')->on('users');
            #$table->foreignID('flights_id')->references('id')->on('flights');
            $table->enum('type', ['carry-on', 'checked'])->nullable();
            $table->float('waga')->nullable();
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
        Schema::dropIfExists('luggage');
    }
};
