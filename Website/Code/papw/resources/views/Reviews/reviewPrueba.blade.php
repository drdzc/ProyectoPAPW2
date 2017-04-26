@extends('layouts.master')

@section('estilo','{{asset("reviews.css")}}')
@section('titulo','ReseñaPrueba')

@section('contenido')
  @if($datos)
  <div class="container-fluid cont text-center">
    <div class="row col-sm-12 presentacion  text-center">
      <div class="lel">
        <img src="{{asset("imagenes/banner.jpg")}}" alt="" class="img-responsive imgJuego">
        <div class="textoImagen">
          <h1>{{$datos[0]->titulo}}</h1>
          <p>{{$datos[0]->nombre}} | info de cuando </p>
        </div>
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
    <div class="row veredictoF">
      <div class="col-xs-12">
        <hr class="col-sm-4 separador ">
        <h2 class="col-sm-4 col-xs-12 text-center">Veredicto</h2>
        <hr class="col-sm-4 separador ">
        <hr class="col-xs-12 hidden-sm hidden-md hidden-lg separador ">
      </div>
      <div class="col-xs-12">
        <p>Aqui va el texto del veredicto final</p>
      </div>
      <div class="calificacion col-xs-12">
        100
      </div>
    </div>

    <!--COMENTARIOS-->
    <div class="contenedor col-md-12">
      <div class="row col-md-12 seccionComentarios text-left">
        <div class="">
          <h2>Comentarios</h2>
        </div>
        <div class="comentar col-xs-12">
          <img src="{{asset("imagenes/yo.jpg")}}" alt="" class="img-thumbnail hidden-xs col-md-2">
          <div class="usuario col-xs-12 col-md-10">
            <textarea name="name" rows="8" cols="80" placeholder="Deja tu comentario :)." class="form-control"></textarea>
          </div>
        </div>
        <div class="col-xs-12 text-right">
          <button type="button" name="button" class="btn boton">Comentar</button>
        </div>
        <div class="comentario col-xs-12">
          <img src="{{asset("imagenes/yo.jpg")}}" alt="" class="img-thumbnail hidden-xs col-sm-1">
          <div class="usuario col-xs-12 col-sm-11">
            <a href="#">Gerardo Daniel Rodriguez Cardona</a>
            <p>Esta muy padre la noticia, felicidades.</p>
            <small><span class="glyphicon glyphicon-calendar"></span>21 de Marzo de 2017</small>
          </div>
            <hr class="col-xs-12">
        </div>

        <div class="comentario col-xs-12">
          <img src="{{asset("imagenes/yo.jpg")}}" alt="" class="img-thumbnail hidden-xs col-md-1">
          <div class="usuario col-xs-12 col-md-11">
            <a href="#">Gerardo Daniel Rodriguez Cardona</a>
            <p>Esta muy padre la noticia, felicidades.</p>
            <small><span class="glyphicon glyphicon-calendar"></span>21 de Marzo de 2017</small>
          </div>
            <hr class="col-xs-12">
        </div>

      </div>
    </div>

    <!--COMENTARIOS-->
  </div>
@endif
@endsection
