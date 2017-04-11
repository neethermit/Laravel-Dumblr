<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ListenerLikeMusicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listener_like_music', function (Blueprint $table) {
            $table->integer('listener_id')->unsigned();
            $table->foreign('listener_id')->references('id')->on('listener');
            $table->integer('music_id')->unsigned();
            $table->foreign('music_id')->references('id')->on('music');
            $table->boolean('erased');
            $table->timestamps();
            $table->primary(['listener_id','music_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listener_like_music');
    }
}
