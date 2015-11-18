<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuestsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Guests', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Surname');
            $table->string('Name');
            $table->integer('Age');
            $table->integer('Rooms_id')->unsigned;
            $table->foreign('Rooms_id')
                ->references('id')
                ->on('Rooms');
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
        Schema::drop('Guests');
    }
}
