<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ListenerRateAlbumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listener_rate_album', function (Blueprint $table) {
            //$table->increments('id');
            $table->integer('listener_id')->unsigned();
            $table->foreign('listener_id')->references('id')->on('listener');
            $table->integer('album_id')->unsigned();
            $table->foreign('album_id')->references('id')->on('album');
            $table->integer('score');
            $table->boolean('erased');
            $table->timestamps();
            $table->primary(['listener_id','album_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listener_rate_album');
    }
}
