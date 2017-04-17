<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_comenta_noticia', function (Blueprint $table) {
            $table->increments('idComentario');
            $table->integer('idUsuario')->unsigned();
            $table->integer('idNoticia')->unsigned();
            $table->text('texto');
            $table->foreign('idUsuario')->references('idUsuario')->on('usuario')->onDelete('cascade');
            $table->foreign('idNoticia')->references('idNoticia')->on('noticia')->onDelete('cascade');
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
        Schema::dropIfExists('usuario_comenta_noticia');
    }
}
