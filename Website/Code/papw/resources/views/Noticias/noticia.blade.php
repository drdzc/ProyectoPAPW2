@extends('layouts.master')

@section('estilo','../css/estilos/noticias.css')
@section('titulo','Noticia')

@section('contenido')
  <div class="container-fluid cont text-center">
  <div class="titulo col-md-12">
    <h1 class="titulo">POLYGAMING se vuelve la pagina mas visitada</h1>
    <h3 class="subtitulo">Estudio reciente dice que somos chidos</h3>
    <div class="creador col-xs-12 text-center">
      <img src="{{asset("imagenes/logo.png")}}" alt="" class="img-responsive col-xs-3">
      <p class="informacion col-xs-9"><span class="redactor">Por: </span> Daniel Rodriguez | <span class="fecha">12/12/12</span></p>
    </div>
  </div>
  <div class="col-md-12">
    <img src="{{asset("imagenes/videojuegos.jpg")}}" alt="" class="imagenNoticia img-responsive">
  </div>
  <div class="col-md-12">
    <p class="texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <p class="texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <p class="texto">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>

  <!--OTRAS NOTCIAS-->
    <h2>Otras Noticias</h2>
    <div class="relacionados row text-center">
      <div class="relacionado col-sm-3">
        <a href="#"><img src="{{asset("imagenes/videojuegos2.jpg")}}" alt="" class="img-responsive"></a>
        <p class="tituloSlide">Titulo</p>
      </div>
      <div class="relacionado col-sm-3">
        <a href="#"><img src="{{asset("imagenes/videojuegos3.jpg")}}" alt="" class="img-responsive"></a>
        <p class="tituloSlide">Titulo</p>
      </div>
    </div>
  <!--OTRAS NOTCIAS-->

  <!--COMENTARIOS-->
  <div class="contenedor col-md-12">
    <div class="col-md-12 seccionComentarios text-left">
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
@endsection
