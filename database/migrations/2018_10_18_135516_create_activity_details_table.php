<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_details', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('activities_id');
            $table->tinyInteger('type')->default(1)->comment('include 1 , not include 2, 3 Upgradable');
            $table->string('option');
            $table->decimal('price',13,2)->default(0)->comment('Always free');
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
        Schema::dropIfExists('activity_details');
    }
}
