<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Beds');
            $table->integer('Floor');
            $table->decimal('Price_per_night');
            $table->boolean('Free');
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
        Schema::drop('Rooms');
    }
}
