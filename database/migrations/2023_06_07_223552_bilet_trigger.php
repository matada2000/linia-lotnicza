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
        DB::unprepared('CREATE TRIGGER miejsce AFTER INSERT ON `tickets` FOR EACH ROW
        BEGIN
            IF ( SELECT class FROM tickets ORDER BY id DESC LIMIT 1) = "economic" THEN
                UPDATE flights SET available_seat_economic = available_seat_economic - 1;
            END IF;
        END');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
