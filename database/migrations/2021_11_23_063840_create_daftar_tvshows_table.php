<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarTvshowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_tvshows', function (Blueprint $table) {
            $table->increments('id_tvshow');
            $table->string('judul_tvshow');
            $table->string('batasan_umur_film');
            $table->string('genre_tvshow');
            $table->string('cover_tvshow')->nullable();
            $table->text('description_tvshow');
            $table->unsignedBigInteger('id_director');
            $table->unsignedBigInteger('id_pemain');
            $table->unsignedBigInteger('id_episode');
            $table->string('daftar_menu');
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
        Schema::dropIfExists('daftar_tvshows');
    }
}
