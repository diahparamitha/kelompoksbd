<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarEpisodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_episodes', function (Blueprint $table) {
            $table->increments('id_episode');
            $table->string('no_episode');
            $table->string('judul_episode');
            $table->text('deskripsi_episode');
            $table->string('cover_episode');
            $table->string('hashtag_episode');
            $table->string('komentar_episode');
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
        Schema::dropIfExists('daftar_episodes');
    }
}
