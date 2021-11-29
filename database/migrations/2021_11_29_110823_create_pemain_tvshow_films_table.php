<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemainTvshowFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemain_tvshow_films', function (Blueprint $table) {
            $table->increments('id_pemain_tvshow_film');
            $table->bigInteger('id_pemain')->unsigned()->references('id')->on('daftar_pemains')->onDelete('restrict');
            $table->bigInteger('id_tvshow')->unsigned()->references('id')->on('daftar_tvshows')->onDelete('restrict');
            $table->bigInteger('id_film')->unsigned()->references('id')->on('daftar_films')->onDelete('restrict');
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
        Schema::dropIfExists('pemain_tvshow_films');
    }
}
