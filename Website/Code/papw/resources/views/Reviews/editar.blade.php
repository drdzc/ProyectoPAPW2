@extends('layouts.master')
@section('estilos')
  <link rel="stylesheet" type="text/css" href="{{asset('css/estilos/reviews.css')}}" />
@endsection
@section('titulo','ReseñaPrueba')

@section('contenido')
  @if($review)
    <form class="" action="/editarReview" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="id" value="{{$review->idResena}}">
  <div class="container-fluid cont text-center">
    <div class="row col-sm-12 presentacion  text-center">
      <div class="lel">
        <img src="{{asset($review->urlBanner)}}" alt="" id="bannerIMG" class="img-responsive imgJuego imgEditable">
        <input type="file" id="banner" name="banner" value="">
        <div class="textoImagen">
          <h1 contenteditable="true" id="tituloP" name="">{{$review->titulo}}</h1>
          <input type="hidden" name="titulo" id="tituloH" value="">
          <p>{{$review->usuarios[0]->nombre}} | info de cuando </p>
        </div>
      </div>

    </div>
    <div class="row">
      <div class="col-md-8 col-xs-12">
        <p class="textoResena" id="c1P" contenteditable="true">{{$review->contenido1}}</p>
        <input type="hidden" name="contenido1" id="c1H" value="">
      </div>
      <div class="col-md-4 col-xs-12"><img src="{{asset($review->urlImagen)}}" alt="" id="img" class="img-responsive imgEditable imagen"> <input type="file" id="imagen1" name="imagen1" value=""></div>
    </div>
    <div class="row">
      <div class="col-md-8  col-md-push-4  col-xs-12">  <p class="textoResena" id="c2P" contenteditable="true">{{$review->contenido2}}</p><input type="hidden" name="contenido2" id="c2H" value=""></div>
          <div class="col-md-4 col-md-pull-8 col-xs-12">
          <img src="{{asset($review->urlImagen2)}}" alt="" id="img2" class=" imgEditable img-responsive imagen">
          <input type="file" id="imagen2" name="imagen2" value="">
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
        <p contenteditable="true" id="veredictoP">Aqui va el texto del veredicto final</p>
        <input type="hidden" name="veredicto" id="veredictoH" value="">
      </div>
      <div class="">
        <p id="fraseP">Frase chida</p>
        <input type="hidden" name="frase" id="fraseH" value="">
      </div>
      <div class="calificacion col-xs-12">
        <p id="calificacionP">100</p>
        <input type="hidden" id="calificacionH" name="calificacion" value="">
      </div>
    </div>

    <!--COMENTARIOS-->

    <!--COMENTARIOS-->
  </div>
    <button type="submit" id="guardar" name="button">Guardar</button>
  </form>
@endif
@endsection

@section('scripts')
  <script type="text/javascript" src={{asset("js/editarReview.js")}}>

  </script>
@endsection
