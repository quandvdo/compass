<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_prices', function (Blueprint $table) {
            $table->unsignedInteger('activities_id');
            $table->dateTimeTz('startDate')->useCurrent();
            $table->dateTimeTz('endDate')->useCurrent();
            $table->decimal('price',13,2)->default(1);
            $table->boolean('isDeposit')->default(false);
            $table->decimal('valueDeposit',5,2)->comment('If < 1 then percentage else fixed value'); //If < 1 then percentage else fixed value
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
        Schema::dropIfExists('activity_prices');
    }
}
