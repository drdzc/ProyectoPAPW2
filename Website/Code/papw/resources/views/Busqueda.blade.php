@extends('layouts.master')
@section('estilos')
  <link rel="stylesheet" type="text/css" href="{{asset('css/estilos/noticias.css')}}" />
@endsection
@section('titulo','Busqueda')

@section('contenido')
  <div class="seccionBusqueda">
    <form>
      <input type="hidden" name="_token" id="token" value="{{csrf_token()}}">
      <label for="">Titulo:</label>
      <input type="text" name="" value="" id="titulo">
      <label for="">Rango de Fechas</label>
      <input type="date" name="" value="" id="fecha1">
      <input type="date" name="" value="" id="fecha2">
      <label for="">Autor:</label>
      <input type="text" name="" value="" id="autor">
      <button id="btnBuscar2" type="button" name="button">Buscar</button>
    </form>

  </div>
  <div class="noticias">
    @foreach ($noticias as $noticia)
      <div class="col-sm-4 col-xs-12 noticia">
        <img src={{$noticia->urlBanner}} alt="" class="img-responsive">
        <h3 class="">{{$noticia->titulo}}</h3>
        <small><span>Por: </span>{{$noticia->usuarios[0]->nombre}}</small>
        <p>{{$noticia->subtitulo}}</p>
        <a href="noticia/{{$noticia->titulo}}/{{$noticia->idNoticia}}">Seguir leyendo</a>
      </div>
    @endforeach
    {{ $noticias->links() }}
  </div>
  <div class="reviews">
    @foreach ($reviews as $review)
      <div class="col-sm-4 col-xs-12 resena">
        <img src={{$review->urlImagen}} alt="" class="img-responsive">
        <h3>{{$review->titulo}}</h3>
        <small><span>Por: </span>{{$review->usuarios[0]->nombre}}</small>
        <p>Aqui va una frase que resuma la reseña</p>
        <a href="review/{{$review->titulo}}/{{Crypt::encrypt($review->idResena)}}">Leer completa</a>
      </div>
    @endforeach
      {{$reviews->links()}}
  </div>
@endsection

@section('scripts')
  <script type="text/javascript" src="js/busqueda2.js">

  </script>
@endsection
