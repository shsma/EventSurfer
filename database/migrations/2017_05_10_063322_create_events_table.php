<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('host_id')->unsigned();
            $table->string('title');
            $table->string('description');
            $table->string('category');
            $table->string('country');
            $table->string('city');
            $table->string('street_number');
            $table->string('street');
            $table->string('apartment');
            $table->string('zip');
            $table->decimal('longitude', 10,6);
            $table->decimal('latitude', 10,6);
            $table->dateTime('start_date_time');
            $table->dateTime('end_date_time');
            $table->timestamps();
            $table->foreign('host_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
