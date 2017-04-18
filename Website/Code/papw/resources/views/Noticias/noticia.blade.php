@extends('layouts.master')

@section('estilo','../css/estilos/noticias.css')
@section('titulo','Noticia')

@section('contenido')
  <div class="container-fluid cont text-center">
  <div class="titulo col-md-12">
    <h1 class="titulo">POLYGAMING se vuelve la pagina mas visitada</h1>
    <h3 class="subtitulo">Estudio reciente dice que somos chidos</h3>
    <p class="informacion"><span class="redactor">Por: </span> Daniel Rodriguez | <span class="fecha">12/12/12</span></p>
  </div>
  <div class="col-md-12">
    <img src="../imagenes/logo.png" alt="" class="imagenNoticia img-responsive">
  </div>
  <div class="col-md-12">
    <p class="texto">este es el puto texto </p>
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
