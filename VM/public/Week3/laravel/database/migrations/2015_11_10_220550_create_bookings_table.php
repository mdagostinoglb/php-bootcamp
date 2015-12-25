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
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
	    $table->integer('room_id')
		->unsigned()
		->nullable();
            $table->foreign('room_id')
                ->references('id')->on('rooms')
                ->onDelete('cascade');
	    $table->date('day_of_arrive');
	    $table->date('day_of_leaving');
	    $table->integer('personal_id')
		->unsigned()
		->nullable();
	    $table->foreign('personal_id')
                ->references('id')->on('guests')
                ->onDelete('cascade');
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
        Schema::drop('bookings');
    }
}
