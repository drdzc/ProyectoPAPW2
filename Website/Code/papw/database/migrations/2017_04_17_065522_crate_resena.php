<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrateResena extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_resena_juego', function (Blueprint $table) {
            $table->integer('idUsuario')->unsigned();
            $table->integer('idJuego')->unsigned();
            $table->primary(['idUsuario','idJuego']);

            $table->string('titulo',50);
            $table->text('contenido');
            $table->text('urlImagen')->nullable();
            $table->text('urlImagen2')->nullable();
            $table->integer('calificacion');
            $table->foreign('idUsuario')->references('idUsuario')->on('usuario')->onDelete('cascade');
            $table->foreign('idJuego')->references('idJuego')->on('juego')->onDelete('cascade');
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
        Schema::dropIfExists('usuario_resena_juego');
    }
}
