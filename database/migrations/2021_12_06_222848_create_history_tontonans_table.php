<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryTontonansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_tontonans', function (Blueprint $table) {
            $table->increments('id_history_tontonan');
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
        Schema::dropIfExists('history_tontonans');
    }
}
