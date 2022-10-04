<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('song_song_list', function (Blueprint $table) {
            $table->id();

            $table->integer('song_list_id');
            $table->foreign('song_list_id')
                ->references('id')
                ->on('song_lists');

            $table->integer('song_id');
            $table->foreign('song_id')
                ->references('id')
                ->on('songs');

            $table->integer('song_number');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('song_song_list');
    }
};
