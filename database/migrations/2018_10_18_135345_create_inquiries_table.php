<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inquiries', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->string('name');
            $table->string('email');
            $table->string('msg');
            $table->text('body')->nullable();
            $table->unsignedInteger('activity_id')->nullable();
            $table->boolean('isReplied')->default(false);
            $table->boolean('isClosed')->default(false);
            $table->tinyInteger('status')->default('1');
            $table->unsignedInteger('user_id')->default(1); // assign to
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
        Schema::dropIfExists('inquiries');
    }
}
