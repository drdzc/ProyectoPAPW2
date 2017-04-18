@extends('layouts.master')

@section('estilo','../css/estilos/reviews.css')
@section('titulo','Noticia')

@section('contenido')
  <div class="container-fluid cont text-center">
    <div class="col-md-12 presentacion">
      <img src="../imagenes/logo.png" alt="" class="img-responsive imgJuego">
      <div class="textoImagen">
        <h1>Titulo de la reseña</h1>
        <p>info de quien | info de cuando </p>
      </div>

    </div>
    <div class="row">
      <div class="col-md-8 col-xs-12">
        <p class="textoResena">aqui va una parte del texto</p>
      </div>
      <div class="col-md-4 col-xs-12"><img src="../imagenes/logo.png" alt=""></div>
    </div>
    <div class="row">
      <div class="col-md-8 col-xs-12">
      <img src="../imagenes/logo.png" alt="">
      </div>
      <div class="col-md-4 col-xs-12">  <p class="textoResena">aqui va una parte del texto</p></div>
    </div>
    <hr>
    <div class="col-md-12 veredicto">
      <h1>Veredicto</h1>
      <p>Veredicto Final</p>
      <div class="calificacion">
        100
      </div>
    </div>
    <div class="col-md-12 seccionComentarios">
      <div class="comentarioLeft">
        <img src="" alt="">
      </div>
      <div class="comentarioRight">
        <p class="nombreUsuario">Juan</p>
        <p>Comentario</p>
        <p>informacion</p>
      </div>
    </div>
  </div>
@endsection
