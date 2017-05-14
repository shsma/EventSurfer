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
            $table->string('title', 50);
            $table->text('description');
            $table->string('category', 50);
            $table->string('country', 50);
            $table->string('city', 50);
            $table->string('street_number', 50);
            $table->string('street', 100);
            $table->string('apartment', 50);
            $table->string('zip', 50)->nullable();
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
