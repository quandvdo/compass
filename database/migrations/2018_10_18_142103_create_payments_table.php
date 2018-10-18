<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('type')->comment('1 cash 2 CK 3 Online Payment 4 Card');
            $table->timestamp('received_date')->useCurrent(true);
            $table->timestamp('payment_date')->useCurrent(true);
            $table->decimal('amount',13,2)->default(0);
            $table->unsignedInteger('user_id')->comment('user who receive');
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
        Schema::dropIfExists('payments');
    }
}
