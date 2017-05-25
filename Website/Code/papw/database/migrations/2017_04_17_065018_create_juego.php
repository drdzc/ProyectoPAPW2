<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJuego extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juego', function (Blueprint $table) {
            $table->increments('idJuego');
            $table->string('titulo',50);
            $table->text('descripcion');
            $table->text("urlPortada");
            $table->integer('idGenero')->unsigned();
            $table->integer('idGenero2')->unsigned()->nullable();
            $table->date('fechaLanzamiento');
            $table->integer('calificacionPagina')->nullable();
            $table->integer('calificacionUsuarios')->nullable();
            $table->string('plataforma',20);
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
        Schema::dropIfExists('juego');
    }
}
