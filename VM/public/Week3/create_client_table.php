<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('surname');
            $table->string('name');
            $table->integer('age');
            $table->foreign('room_id')
                  ->references('id')->on('rooms')
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::drop('clients');
    }
}
