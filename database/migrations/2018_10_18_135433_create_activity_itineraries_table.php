<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityItinerariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_itineraries', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('activities_id');
            $table->string('location');
            $table->string('title');
            $table->string('subtitle');
            $table->text('body');
            $table->string('img');
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
        Schema::dropIfExists('activity_itineraries');
    }
}
