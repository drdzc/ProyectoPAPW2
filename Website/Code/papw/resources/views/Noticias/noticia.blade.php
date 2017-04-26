@extends('layouts.master')

@section('estilo','../css/estilos/noticias.css')
@section('titulo','Noticia')

@section('contenido')
    @if($datos)
  <div class="container-fluid cont text-center">

  <div class="row titulo col-md-12">
    <h1 class="titulo">{{$datos[0]->titulo}}</h1>
    <h3 class="subtitulo">{{$datos[0]->subtitulo}}</h3>
    <div class="creador col-xs-12 text-center">
      <a href="/perfil/{{$datos[0]->idUsuario}}" class="col-xs-5 col-sm-4 col-md-5"><img src="{{asset("imagenes/logo.png")}}" alt="" class="img-responsive "></a>
      <p class="informacion col-xs-7 col-sm-8 col-md-7"><span class="redactor">Por: </span> {{$datos[0]->nombre}} | <span class="fecha">{{$datos[0]->created_at}}</span></p>
    </div>
  </div>
  <div class="row col-md-12">
    <img src="{{asset($datos[0]->urlBanner)}}" alt="" class="imagenNoticia img-responsive">
  </div>
  <div class="col-md-12">
    <p class="texto">{{$datos[0]->contenido}}</p>

  </div>

  <!--OTRAS NOTCIAS-->
  <div class="col-xs-12">
    <hr class="col-sm-4 separador ">
    <h2 class="col-sm-4 col-xs-12 text-center">Otras Noticias</h2>
    <hr class="col-sm-4 separador ">
    <hr class="col-xs-12 hidden-sm hidden-md hidden-lg separador ">
  </div>
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
    <div class=" row col-md-12 seccionComentarios text-left">
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
