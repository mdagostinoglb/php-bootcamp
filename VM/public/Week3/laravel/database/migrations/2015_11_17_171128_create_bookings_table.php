<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration 
{
    public function up()
    {
    Schema::create('bookings', function (Blueprint $table) 
    {
        $table->increments('id');
        $table->date('dateArrive');
        $table->date('dateLeaving');
        $table->integer('personalId')->unsigned();
        $table->integer('roomId')->unsigned();

        $table->foreign('roomId')
            ->references('id')->on('rooms')
            ->onDelete('cascade');
        $table->foreign('personalId')
            ->references('personalId')->on('rooms')
            ->onDelete('cascade');    
        $table->timestamps();
    });
    }

    public function down()
    {
    Schema::drop('bookings');
    }
}

