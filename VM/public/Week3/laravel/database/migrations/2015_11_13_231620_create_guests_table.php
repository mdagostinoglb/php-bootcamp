<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuestsTable extends Migration
{
    
    public function up()
    {
        Schema::create('guests', function (Blueprint $table) 
        {
            $table->increments('personalId');
            $table->string('name');
            $table->string('surname');
            $table->integer('age');
            $table->integer('roomId')->unsigned();

            $table->foreign('roomId')
                ->references('id')->on('rooms')
                ->onDelete('cascade');
                
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('guests');
    }
}
