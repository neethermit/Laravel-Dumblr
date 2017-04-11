<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MusicHasRemarkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('music_has_remark', function (Blueprint $table) {
            $table->integer('remark_id')->unsigned();
            $table->foreign('remark_id')->references('id')->on('remark');
            $table->integer('music_id')->unsigned();
            $table->foreign('music_id')->references('id')->on('music');
            $table->boolean('erased')->default('0');
            $table->timestamps();
            $table->primary(['remark_id','music_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('music_has_remark');
    }
}
