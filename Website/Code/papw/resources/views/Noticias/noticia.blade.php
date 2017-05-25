@extends('layouts.master')
@section('estilos')
  <link rel="stylesheet" type="text/css" href="{{asset('css/estilos/noticias.css')}}" />
@endsection
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

    </div>
  <!--OTRAS NOTCIAS-->

  <!--COMENTARIOS-->
  <div class="contenedor col-md-12">
    <div class=" row col-md-12 seccionComentarios text-left">
      <div class="">
        <h2>Comentarios</h2>
      </div>
      <form class="" id="formComentar" method="post">
        <input type="hidden" name="_token" id="token" value="{{csrf_token()}}">
        <input type="hidden" name="id" id="idN" value="{{$datos[0]->idNoticia}}">
        <div class="comentar col-xs-12">
          <img src="{{asset(Auth::user()->urlFoto)}}" alt="" class="img-thumbnail hidden-xs col-md-2">
          <div class="usuario col-xs-12 col-md-10">
            <textarea name="name" id="textoComentario" rows="8" cols="80" placeholder="Deja tu comentario :)." class="form-control"></textarea>
          </div>
        </div>
        <div class="col-xs-12 text-right">
          <button type="button" name="button" class="btn boton" id="comentar">Comentar</button>
        </div>
      </form>
      <div class="comentarios col-xs-12">

      </div>



    </div>
  </div>

  <!--COMENTARIOS-->
</div>
@endif
@endsection

@section('scripts')
  <script type="text/javascript" src={{asset("js/NoticiaEspecifica.js")}}>

  </script>
@endsection
