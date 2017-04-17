<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Llavejuego extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('juego', function (Blueprint $table) {
          $table->foreign('idGenero')->references('idGenero')->on('genero')->onDelete('cascade');
          $table->foreign('idGenero2')->references('idGenero')->on('genero')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
