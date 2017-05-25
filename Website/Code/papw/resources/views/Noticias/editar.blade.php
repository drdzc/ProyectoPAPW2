@extends('layouts.master')
@section('estilos')
  <link rel="stylesheet" type="text/css" href="{{asset('css/estilos/noticias.css')}}" />
@endsection
@section('titulo','Noticia')

@section('contenido')
    @if($noticia)
      <form class="" action="/editarNoticia" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="id" value="{{$noticia->idNoticia}}">
  <div class="container-fluid cont text-center">

  <div class="row titulo col-md-12">
    <h1 class="titulo" contenteditable="true" id="tituloP">{{$noticia->titulo}}</h1>
    <input type="hidden" name="titulo" id="tituloH" value="">
    <h3 class="subtitulo" contenteditable="true" id="subtituloP">{{$noticia->subtitulo}}</h3>
    <input type="hidden" name="subtitulo" id="subtituloH" value="">
    <div class="creador col-xs-12 text-center">
      <a href="/perfil/{{$noticia->idUsuario}}" class="col-xs-5 col-sm-4 col-md-5"><img src="{{$noticia->usuarios[0]->urlFoto}}" alt="" class="img-responsive "></a>
      <p class="informacion col-xs-7 col-sm-8 col-md-7"><span class="redactor">Por: </span> {{$noticia->usuarios[0]->nombre}} | <span class="fecha">{{$noticia->created_at}}</span></p>
    </div>
  </div>
  <div class="row col-md-12">
    <img src="{{asset($noticia->urlBanner)}}" alt="" class="imagenNoticia img-responsive" id="imgEditable">
    <input type="file" id="banner" name="banner" value="">
  </div>
  <div class="col-md-12">
    <p class="texto" contenteditable="true" id="textoP">{{$noticia->contenido}}</p>
    <input type="hidden" name="texto" id="textoH" value="">
  </div>
  <button type="submit" id="guardar" name="button">Guardar</button>
</form>
  <!--OTRAS NOTCIAS-->
  <div class="col-xs-12">

  </div>
    <div class="relacionados row text-center">

    </div>
  <!--OTRAS NOTCIAS-->

  <!--COMENTARIOS-->


  <!--COMENTARIOS-->
</div>
@endif
@endsection

@section('scripts')
  <script type="text/javascript" src={{asset("js/editarNoticia.js")}}>

  </script>
@endsection
