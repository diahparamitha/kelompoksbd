<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarkusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftarkus', function (Blueprint $table) {
            $table->increments('id_daftarku');
            $table->unsignedBigInteger('id_film')->references('id')->on('daftar_films')->onDelete('restrict');
            $table->unsignedBigInteger('id_tvshow')->references('id')->on('daftar_tvshows')->onDelete('restrict');
            $table->unsignedBigInteger('id_user')->references('id')->on('Users')->onDelete('restrict');
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
        Schema::dropIfExists('daftarkus');
    }
}
