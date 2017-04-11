<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlbumHasRemarkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album_has_remark', function (Blueprint $table) {
            $table->integer('remark_id')->unsigned();
            $table->foreign('remark_id')->references('id')->on('remark');
            $table->integer('album_id')->unsigned();
            $table->foreign('album_id')->references('id')->on('album');
            $table->boolean('erased');
            $table->timestamps();
            $table->primary(['remark_id','album_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('album_has_remark');
    }
}
