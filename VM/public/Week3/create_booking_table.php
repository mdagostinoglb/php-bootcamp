<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
		      	$table->integer('room_id')
            $table->foreign('room_id')
                  ->references('id')->on('rooms')
            $table->date('arrive_date');
		      	$table->date('leave_date');
			      $table->string('personal_ids');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::drop('bookings');
    }
}
