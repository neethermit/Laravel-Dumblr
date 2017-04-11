<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ListenerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listener', function (Blueprint $table) {
            $table->increments('id');
            //$table->integer('image_id')->unsigned();
            //$table->foreign('image_id')->references('id')->on('image');
            $table->string('image_url');
            $table->string('name');
            $table->string('email');
            $table->unique('email');
            $table->string('password');
            $table->date('birthday');
            $table->boolean('gender');
            $table->boolean('erased')->default('0');
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
        Schema::dropIfExists('listener');
    }
}
