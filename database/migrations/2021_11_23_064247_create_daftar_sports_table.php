<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarSportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_sports', function (Blueprint $table) {
            $table->increments('id_sports');
            $table->string('nama_sports');
            $table->string('cover_sports')->nullable();
            $table->text('description_sports');
            $table->string('komentar_sports');
            $table->string('hashtag_sports');
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
        Schema::dropIfExists('daftar_sports');
    }
}
