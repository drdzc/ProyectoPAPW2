@extends('layouts.master')

@section('estilo','../css/estilos/juego.css')
@section('titulo','Juego')

@section('contenido')
  <div class="container-fluid cont">
    <div class="juego row text-center">
      <img src="{{asset("imagenes/zelda.png")}}" alt="" class="img-responsive col-md-3 imgJuego">
      <div class="informacion col-md-4">
        <h1>The Legend of Zelda: Breath of the Wild</h1>
        <p class="descripcion">Nuevo juego de la franquicia de nintendo enfocado al mundo abierto.</p>
        <p>
          <span>Género(s): </span> <a href="#">Aventura</a>,<a href="#">Acción</a>
        </p>
        <p><span>Fecha de lanzamiento:</span> 03 de Marzo del 2017</p>
      </div>
      <div class="calificacion col-md-5">
        <h2 class="col-sm-6">Calificación Polygaming</h2>
        <h2 class="col-sm-6">Calificación de usuarios</h2>
      </div>
    </div>

    <h2>Reseñas relacionadas</h2>
  <!--RESEÑAS-->
  <div class="resenas row text-center">
    <div class="col-sm-3 col-xs-12 resena">
      <img src="{{asset("imagenes/videojuegos3.jpg")}}" alt="" class="img-responsive">
      <p class="calificacionR">100</p>
      <div class="datos">
        <h3>Titulo</h3>
        <small><span>Por: </span>Gerardo Rodriguez</small>
        <p>Aqui va una frase que resuma la reseña</p>
        <a href="#">Leer completa</a>
      </div>
    </div>
    <div class="col-sm-3 col-xs-12 resena">
      <img src="{{asset("imagenes/videojuegos3.jpg")}}" alt="" class="img-responsive">
      <p class="calificacionR">100</p>
      <div class="datos">
        <h3>Titulo</h3>
        <small><span>Por: </span>Gerardo Rodriguez</small>
        <p>Aqui va una frase que resuma la reseña</p>
        <a href="#">Leer completa</a>
      </div>
    </div>
    <div class="col-sm-3 col-xs-12 resena">
      <img src="{{asset("imagenes/videojuegos3.jpg")}}" alt="" class="img-responsive">
      <p class="calificacionR">100</p>
      <div class="datos">
        <h3>Titulo</h3>
        <small><span>Por: </span>Gerardo Rodriguez</small>
        <p>Aqui va una frase que resuma la reseña</p>
        <a href="#">Leer completa</a>
      </div>
    </div>
    <div class="col-sm-3 col-xs-12 resena">
      <img src="{{asset("imagenes/videojuegos3.jpg")}}" alt="" class="img-responsive">
      <p class="calificacionR">100</p>
      <div class="datos">
        <h3>Titulo</h3>
        <small><span>Por: </span>Gerardo Rodriguez</small>
        <p>Aqui va una frase que resuma la reseña</p>
        <a href="#">Leer completa</a>
      </div>
    </div>
  </div>

  <a href="#" class="ver">Ver más reseñas</a>
  <!--RESEÑAS-->

  <h2>Juegos relacionados</h2>
  <!--RELACIONADOS-->
  <div class="relacionados row text-center">
    <div class="relacionado col-sm-3">
      <a href="#"><img src="{{asset("imagenes/zelda.png")}}" alt="" class="img-responsive"></a>
      <p class="tituloSlide">Titulo</p>
    </div>
    <div class="relacionado col-sm-3">
      <a href="#"><img src="{{asset("imagenes/zelda.png")}}" alt="" class="img-responsive"></a>
      <p class="tituloSlide">Titulo</p>
    </div>
    <div class="relacionado col-sm-3">
    <a href="#"><img src="{{asset("imagenes/zelda.png")}}" alt="" class="img-responsive"></a>
      <p class="tituloSlide">Titulo</p>
    </div>

  </div>
  <!--RELACIONADOS-->
</div>
@endsection
