<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PlaylistHasMusicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playlist_has_music', function (Blueprint $table) {
            $table->integer('playlist_id')->unsigned();
            $table->foreign('playlist_id')->references('id')->on('playlist');
            $table->integer('music_id')->unsigned();
            $table->foreign('music_id')->references('id')->on('music');
            $table->boolean('erased')->default('0');
            $table->timestamps();
            $table->primary(['playlist_id','music_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('playlist_has_music');
    }
}
