<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlbumHasMusicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album_has_music', function (Blueprint $table) {
            $table->integer('music_id')->unsigned();
            $table->foreign('music_id')->references('id')->on('music');
            $table->integer('album_id')->unsigned();
            $table->foreign('album_id')->references('id')->on('album');
            $table->boolean('erased');
            $table->timestamps();
            $table->primary(['music_id','album_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('album_has_music');
    }
}
