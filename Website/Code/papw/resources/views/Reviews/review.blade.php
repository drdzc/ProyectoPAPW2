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
        <p class="textoResena">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="textoResena">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="col-md-4 col-xs-12"><img src="../imagenes/logo.png" alt="" class="img-responsive imagen"></div>
    </div>
    <div class="row">
      <div class="col-md-8  col-md-push-4  col-xs-12">  <p class="textoResena">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
          <div class="col-md-8 col-md-push-4 col-xs-12">  <p class="textoResena">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
          <div class="col-md-4 col-md-pull-8 col-xs-12">
          <img src="../imagenes/logo.png" alt="" class="img-responsive imagen">
          </div>
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
