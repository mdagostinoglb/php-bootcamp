<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('beds');
            $table->integer('floor');
            $table->decimal('price_per_night');
            $table->boolean('free');
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::drop('rooms');
    }
}
