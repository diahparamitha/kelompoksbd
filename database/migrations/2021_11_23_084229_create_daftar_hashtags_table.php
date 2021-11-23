<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarHashtagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_hashtags', function (Blueprint $table) {
            $table->increments('id_hashtag');
            $table->bigInteger('id_tvshow')->unsigned()->references('id')->on('daftar_tvshows')->onDelete('restrict');
            $table->bigInteger('id_episode')->unsigned()->references('id')->on('daftar_episodes')->onDelete('restrict');
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
        Schema::dropIfExists('daftar_hashtags');
    }
}
