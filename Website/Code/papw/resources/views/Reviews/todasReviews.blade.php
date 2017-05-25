@extends('layouts.master')

@section('estilo','../css/estilos/principal.css')
@section('titulo','Reseñas')

@section('contenido')
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
  </div>
  {{$reviews->links()}}
@endsection

@section('scripts')
<script type="text/javascript" src="js/reviews.js">

</script>
@endsection
