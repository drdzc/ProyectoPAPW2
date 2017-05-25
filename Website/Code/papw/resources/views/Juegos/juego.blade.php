@extends('layouts.master')

@section('estilo','../css/estilos/juego.css')
@section('titulo','Juego')

@section('contenido')
  <div class="container-fluid cont">
    <div class="juego row text-center">
      <img src="{{$juego[0]->urlPortada}}" alt="" class="img-responsive col-md-3 imgJuego">
      <div class="informacion col-md-4">
        <h1>{{$juego[0]->titulo}}</h1>
        <p class="descripcion">{{$juego[0]->descripcion}}</p>
        <p><span>Plataforma:</span> {{$juego[0]->plataforma}}</p>
        <p>
          <span>Género(s): </span> <a href="">Aventura</a>,<a href="#">Acción</a>
        </p>
        <p><span>Fecha de lanzamiento:</span> 03 de Marzo del 2017</p>
        <a href="/review/crear/{{$juego[0]->idJuego}}" class="btn btn-primary liga">Escribir reseña</a>
      </div>
      <div class="calificacion col-md-5 ">
        <div class="col-sm-6 text-center">
          <h2 class=col-xs-12>Calificación Polygaming</h2>
          <canvas clas=col-xs-12 id="canvas" ></canvas>
        </div>

        <h2 class="col-sm-6">Calificación de usuarios</h2>
      </div>
    </div>

    <h2>Reseñas relacionadas</h2>
  <!--RESEÑAS-->
  <div class="resenas row text-center">
    @if (!empty($reviews[0]))
      @foreach ($reviews as $review)
        <div class="col-sm-3 col-xs-12 resena">
          <img src="{{asset($review->urlBanner)}}" alt="" class="img-responsive">
          <p class="calificacionR">{{$review->calificacion}}</p>
          <div class="datos">
            <h3>{{$review->titulo}}</h3>
            <small><span>Por: </span>{{$review->usuarios[0]->nombre}}</small>
            <p>{{$review->frase}}</p>
            <a href="/review/{{$review->titulo}}/{{Crypt::encrypt($review->idResena)}}">Leer completa</a>
          </div>
        </div>
      </div>

      <a href="#" class="ver">Ver más reseñas</a>
      @endforeach
    @else
      <h3>No hay reseñas sobre este juego. Haz tu reseña!</h3>
    </div>
    @endif


  <!--RESEÑAS-->

  <h2>Juegos relacionados</h2>
  <!--RELACIONADOS-->
  <div class="relacionados row text-center">
    @foreach ($relacionados as $juego)
      <div class="relacionado col-sm-4">
        <a href="/juego/{{$juego->titulo}}"><img src="{{asset($juego->urlPortada)}}" alt="" class="img-responsive"></a>
        <p class="tituloSlide">{{$juego->titulo}}</p>
      </div>
    @endforeach
  </div>
  <!--RELACIONADOS-->
</div>


</script>
@endsection
