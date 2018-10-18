<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('subtitle');
            $table->string('description');
            $table->string('departureLocation');
            $table->string('slug')->nullable();
            $table->integer('cutoffTime')->default(0)->comment('Cut Off time - Period allow Customer placed order');
            $table->unsignedInteger('categories_id')->default('1')->comment('default Generic Tours. Need to setup');
            $table->boolean('isActive')->default(true);
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
        Schema::dropIfExists('activities');
    }
}
