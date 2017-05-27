<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ListenerFollowListenerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listener_follow_listener', function (Blueprint $table) {
            $table->integer('follower_id')->unsigned();
            $table->foreign('follower_id')->references('id')->on('listener');
            $table->integer('followed_id')->unsigned();
            $table->foreign('followed_id')->references('id')->on('listener');
            $table->boolean('erased')->default(0);
            $table->timestamps();
            $table->primary(['follower_id','followed_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listener_follow_listener');
    }
}
