<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_films', function (Blueprint $table) {
            $table->increments('id_film');
            $table->string('judul_film');
            $table->string('batasan_umur_film');
            $table->string('cover_film')->nullable();
            $table->text('description_film');
            $table->unsignedBigInteger('id_director')->references('id')->on('daftar_directors')->onDelete('restrict');
            $table->unsignedBigInteger('id_pemain')->references('id')->on('daftar_pemains')->onDelete('restrict');
            $table->unsignedBigInteger('id_genre')->references('id')->on('daftar_genres')->onDelete('restrict');
            $table->string('komentar_film');
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
        Schema::dropIfExists('daftar_films');
    }
}
