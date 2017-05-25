@extends('layouts.master')

@section('estilo','../css/estilos/principal.css')
@section('titulo','Polygaming')

@section('contenido')
  <div class="noticias">
    @foreach ($noticias as $noticia)
      <div class="col-sm-4 col-xs-12 noticia">
        <img src={{$noticia->urlBanner}} alt="" class="img-responsive">
        <h3 class="">{{$noticia->titulo}}</h3>
        <small><span>Por: </span>{{$noticia->nombre}}</small>
        <p>{{$noticia->subtitulo}}</p>
        <a href="noticia/{{$noticia->titulo}}/{{$noticia->idNoticia}}">Seguir leyendo</a>
      </div>
    @endforeach
  </div>
  {{ $noticias->links() }}
@endsection

@section('scripts')
<script type="text/javascript" src="js/noticias.js">

</script>
@endsection
