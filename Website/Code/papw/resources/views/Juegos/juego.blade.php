@extends('layouts.master')

@section('estilo','../css/estilos/juego.css')
@section('titulo','Juego')

@section('contenido')
  <div class="container-fluid cont">
    <div class="juego row text-center">
      <img src="../imagenes/logo.png" alt="" class="img-responsive col-md-3 imgJuego">
      <div class="informacion col-md-4">
        <h1>Titulo del Juego</h1>
        <p>Descripcion del juego</p>
        <p>
          generos
        </p>
        <p>Fecha de lanzamiento: </p>
        <p>
          numero
        </p>
      </div>
      <div class="calificacion col-md-5">
        <h2 class="col-sm-6">Calificación Polygaming</h2>
        <h2 class="col-sm-6">Calificación de usuarios</h2>
      </div>
    </div>
  

  <!--RESEÑAS-->
  <div class="resenas col-md-12">
    <div class="col-md-3">reseña1</div>
    <div class="col-md-3">reseña2</div>
    <div class="col-md-3">reseña3</div>
    <div class="col-md-3">reseña4</div>
  </div>
  <!--RESEÑAS-->

  <!--RELACIONADOS-->
  <div class="relacionados col-md-12">
    <div class="col-md-3">Juego1</div>
    <div class="col-md-3">Juego2</div>
    <div class="col-md-3">Juego3</div>
    <div class="col-md-3">Juego4</div>
  </div>
  <!--RELACIONADOS-->
</div>
@endsection
