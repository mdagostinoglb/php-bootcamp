<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->date('Arrival_Date');
            $table->date('Leaving_Date');
            $table->integer('Rooms_id')->unsigned;
            $table->foreign('Rooms_id')
                ->references('id')
                ->on('Rooms');
            $table->integer('Guests_id')->unsigned;
            $table->foreign('Guests_id')
                ->references('id')
                ->on('Guests');
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
        Schema::drop('Bookings');
    }
}
