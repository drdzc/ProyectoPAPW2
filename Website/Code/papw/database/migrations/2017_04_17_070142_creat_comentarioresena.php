<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatComentarioresena extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_comenta_resena', function (Blueprint $table) {
            $table->increments('idComentario');
            $table->integer('idUsuario')->unsigned();
            $table->integer('idJuego')->unsigned();
            $table->integer('idUsuario2')->unsigned();
            $table->string('texto');
            $table->foreign('idUsuario')->references('idUsuario')->on('usuario')->onDelete('cascade');
            $table->foreign('idJuego')->references('idJuego')->on('usuario_resena_juego')->onDelete('cascade');
            $table->foreign('idUsuario2')->references('idUsuario')->on('usuario_resena_juego')->onDelete('cascade');
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
        Schema::dropIfExists('usuario_comenta_resena');
    }
}
