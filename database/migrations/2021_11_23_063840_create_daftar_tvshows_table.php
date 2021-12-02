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
            $table->string('batasan_umur_tvshow');
            $table->string('cover_tvshow')->nullable();
            $table->text('description_tvshow');
            $table->text('komentar_tvshow');
            $table->bigInteger('id_director')->unsigned()->references('id')->on('daftar_directors')->onDelete('restrict');
            $table->bigInteger('id_pemain')->unsigned()->references('id')->on('daftar_pemains')->onDelete('restrict');
            $table->bigInteger('id_episode')->unsigned()->references('id')->on('daftar_episodes')->onDelete('restrict');
            $table->bigInteger('id_genre')->unsigned()->references('id')->on('daftar_genres')->onDelete('restrict');
            $table->bigInteger('id_menu')->unsigned()->references('id')->on('daftar_menus')->onDelete('restrict');
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
