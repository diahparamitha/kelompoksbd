<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGenreTvshowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genre_tvshows', function (Blueprint $table) {
            $table->increments('id_genre_film');
            $table->bigInteger('id_tvshow')->unsigned()->references('id')->on('daftar_tvshows')->onDelete('restrict');
            $table->unsignedBigInteger('id_genre')->references('id')->on('daftar_genres')->onDelete('restrict');
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
        Schema::dropIfExists('genre_tvshows');
    }
}
