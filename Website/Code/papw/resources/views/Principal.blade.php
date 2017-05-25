@extends('layouts.master')

@section('estilo','../css/estilos/principal.css')
@section('titulo','Polygaming')

@section('contenido')
  <div class="container text-center contenido" id="app">
    <div class="crearContenido row">
      <div class="col-xs-6 cNoticia">
        <img src="{{asset("imagenes/noticia.png")}}" alt="" class="img-responsive">
        <a href="/noticias/crear">Escribe una noticia</a>
      </div>
      <div class="col-xs-6 cReseña ">
        <img src="{{asset("imagenes/noticia.png")}}" alt="" class="img-responsive">
        <a href="/review/crear">Escribe una reseña</a>
      </div>
    </div>
        <!--CARRUSEL-->
        <div class="row">
          <div id="carousel-1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-1" data-slide-to="1" class=""></li>
              <li data-target="#carousel-1" data-slide-to="2" class=""></li>
            </ol>

            <div class="carousel-inner" role="listbox ">

              <div class="item active">
                @if (!empty($noticiasR[0]))
                  <img src="{{asset($noticiasR[0]->urlBanner)}}" alt="" class=" imgCarrusel">
                  <div class="carousel-caption">
                    <h3>{{$noticiasR[0]->titulo}}</h3>
                    <p class="tipo">NOTICIA</p>
                  </div>
                @endif
              </div>
              <div class="item">
                @if (!empty($noticiasR[1]))
                  <img src="{{asset($noticiasR[1]->urlBanner)}}" alt="" class=" imgCarrusel">
                  <div class="carousel-caption">
                    <h3>{{$noticiasR[1]->titulo}}</h3>
                    <p class="tipo">NOTICIA</p>
                  </div>
                @endif
              </div>
              <div class="item">
                @if (!empty($noticiasR[2]))
                  <img src="{{asset($noticiasR[2]->urlBanner)}}" alt="" class=" imgCarrusel">
                  <div class="carousel-caption">
                    <h3>{{$noticiasR[2]->titulo}}</h3>
                    <p class="tipo">NOTICIA</p>
                  </div>
                @endif
              </div>
            </div>
          </div>
        </div>
        <!--CARRUSEL-->

        <br />
        <br />

        <!--NUEVO-->
        <div class="row col-sm-12 nuevoUsuarios">
          @foreach ($reviewsR as $rev)
            <div class="col-sm-4 col-xs-12">
              <img src="{{asset($rev->urlBanner)}}" alt="" class="img-responsive">
              <p class="tipo">Reseña</p>
              <h3 class=titulo>{{$rev->titulo}}</h3>
            </div>
          @endforeach
        </div>
        <!--NUEVO-->



        <!--BARRA LATERAL-->
      <!--  <div class="col-md-3 hidden-sm hidden-xs text-center barra">
          <div class="lanzamiento">
            <h3>Lanzamientos</h3>
          </div>
          <div class="juego">
            <img src="{{asset("imagenes/videojuegos.jpg")}}" alt="" class="img-responsive">
            <h3>Titulo</h3>
            <hr />
          </div>
          <div class="juego">
            <img src="{{asset("imagenes/videojuegos.jpg")}}" alt="" class="img-responsive">
            <h3>Titulo</h3>
            <hr />
          </div>
          <div class="juego">
            <img src="{{asset("imagenes/videojuegos.jpg")}}" alt="" class="img-responsive">
            <h3>Titulo</h3>
            <hr />
          </div>
          <div class="juego">
            <img src="{{asset("imagenes/videojuegos.jpg")}}" alt="" class="img-responsive">
            <h3>Titulo</h3>
            <hr />
          </div>
          <div class="juego">
            <img src="{{asset("imagenes/videojuegos.jpg")}}" alt="" class="img-responsive">
            <h3>Titulo</h3>
            <hr />
          </div>
            <a href="" class="btn ver">Ver más</a>
        </div>
        <!--BARRA LATERAL-->

        <!--ULTIMAS RESEÑAS-->
        <!--<div class="col-md-12 hidden-md hidden-lg ultimasResenas">
          <div id="carousel-1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators ols">
              <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-1" data-slide-to="1" class=""></li>
              <li data-target="#carousel-1" data-slide-to="2" class=""></li>
            </ol>

            <div class="carousel-inner" role="listbox ">

              <div class="item active slide">
                <div class="juegoResenado col-sm-4">
                  <img src="{{asset("imagenes/videojuegos.jpg")}}" alt="" class="img-responsive">
                  <p class="tituloSlide">Titulo</p>
                  <p class="calificacion">100</p>
                </div>
                <div class="juegoResenado col-sm-4">
                  <img src="{{asset("imagenes/videojuegos.jpg")}}" alt="" class="img-responsive">
                  <p class="tituloSlide">Titulo</p>
                  <p class="calificacion">100</p>
                </div>
                <div class="juegoResenado col-sm-4">
                  <img src="{{asset("imagenes/videojuegos.jpg")}}" alt="" class="img-responsive">
                  <p class="tituloSlide">Titulo</p>
                  <p class="calificacion">100</p>
                </div>
              </div>
              <div class="item slide">
                <div class="juegoResenado col-sm-4">
                  <img src="{{asset("imagenes/videojuegos.jpg")}}" alt="" class="img-responsive">
                  <p class="tituloSlide">Titulo</p>
                  <p class="calificacion">100</p>
                </div>
                <div class="juegoResenado col-sm-4">
                  <img src="{{asset("imagenes/videojuegos.jpg")}}" alt="" class="img-responsive">
                  <p class="tituloSlide">Titulo</p>
                  <p class="calificacion">100</p>
                </div>
                <div class="juegoResenado col-sm-4">
                  <img src="{{asset("imagenes/videojuegos.jpg")}}" alt="" class="img-responsive">
                  <p class="tituloSlide">Titulo</p>
                  <p class="calificacion">100</p>
                </div>
              </div>
              <div class="item slide">
                <div class="juegoResenado col-sm-4">
                  <img src="{{asset("imagenes/videojuegos.jpg")}}" alt="" class="img-responsive">
                  <p class="tituloSlide">Titulo</p>
                  <p class="calificacion">100</p>
                </div>
                <div class="juegoResenado col-sm-4">
                  <img src="{{asset("imagenes/videojuegos.jpg")}}" alt="" class="img-responsive">
                  <p class="tituloSlide">Titulo</p>
                  <p class="calificacion">100</p>
                </div>
                <div class="juegoResenado col-sm-4">
                  <img src="{{asset("imagenes/videojuegos.jpg")}}" alt="" class="img-responsive">
                  <p class="tituloSlide">Titulo</p>
                  <p class="calificacion">100</p>
                </div>
              </div>
            </div>
          </div>
        </div>-->
        <!--ULTIMAS RESEÑAS-->

        <!--NOTICIAS-->
        <div class="row noticias">

          <div class="col-xs-12">
            <h2 class="col-md-3 col-xs-12 text-left">Noticias</h2>
            <hr class="col-md-6 col-xs-12 separador ">
          </div>
          <div class="row text-center">
            @foreach ($noticias as $noticia)
              <div class="col-sm-4 col-xs-12 noticia">
                <img src={{$noticia->urlBanner}} alt="" class="col-xs-12 imgNoticia">
                <h3 class="col-xs-12">{{$noticia->titulo}}</h3>
                <small class="col-xs-12"><span>Por: </span>{{$noticia->admins[0]->nombre}}</small>
                <p class="col-xs-12">{{$noticia->subtitulo}}</p>
                <a href="noticia/{{$noticia->titulo}}/{{Crypt::encrypt($noticia->idNoticia)}}">Seguir leyendo</a>
              </div>
            @endforeach
            <!--<todoNoticias></todoNoticias>-->
          </div>
        <!--  <div class="row text-center">
            <div class="col-sm-4 col-xs-12 noticia">
              <img src="{{asset("imagenes/videojuegos2.jpg")}}" alt="" class="img-responsive">
              <h3 class="">Titulo</h3>
              <small><span>Por: </span>Carolina Esqueda</small>
              <p>Información adicional acerca de la noticia para atraer la atencion del usuario al usuario...</p>
              <a href="#">Seguir leyendo</a>
            </div>
            <div class="col-sm-4 col-xs-12 noticia">
              <img src="{{asset("imagenes/videojuegos2.jpg")}}" alt="" class="img-responsive">
              <h3 class="">Titulo</h3>
              <small><span>Por: </span>Salvador Lopez</small>
              <p>Información adicional acerca de la noticia para atraer la atencion del usuario al usuario...</p>
              <a href="#">Seguir leyendo</a>
            </div>
            <div class="col-sm-4 col-xs-12 noticia">
              <img src="{{asset("imagenes/videojuegos2.jpg")}}" alt="" class="img-responsive">
              <h3 class="">Titulo</h3>
              <small><span>Por: </span>Gerardo Rodriguez</small>
              <p>Información adicional acerca de la noticia para atraer la atencion del usuario al usuario...</p>
              <a href="#">Seguir leyendo</a>
            </div>
          </div>-->
          <a href="{{url('/todasNoticias')}}" class=verMasNoticias>Ver todas las noticias >></a>
        </div>
        <!--NOTICIAS-->

        <!--Reseñas-->
        <div class="row resenas">
          <div class="col-xs-12">
            <h2 class="col-md-3 col-xs-12 text-left">Reseñas</h2>
            <hr class="col-md-6 col-xs-12 separador ">
          </div>
          <div class="row text-center ">
            @foreach ($reviews as $review)
              <div class="col-sm-4 col-xs-12 resena">
                <img src={{$review->urlImagen}} alt="" class="img-responsive imgResena col-xs-12">
                <h3 class="col-xs-12">{{$review->titulo}}</h3>
                <small><span>Por: </span>{{$review->admins[0]->nombre}}</small>
                <p>{{$review->frase}}</p>
                <a href="review/{{$review->titulo}}/{{Crypt::encrypt($review->idResena)}}">Leer completa</a>
              </div>
            @endforeach
          <!--  <todoreviews></todoreviews>-->
          </div>
        <!--  <div class="row text-center">
            <div class="col-sm-4 col-xs-12 resena">
              <img src="{{asset("imagenes/videojuegos3.jpg")}}" alt="" class="img-responsive">
              <h3>Titulo</h3>
              <small><span>Por: </span>Gerardo Rodriguez</small>
              <p>Aqui va una frase que resuma la reseña</p>
              <a href="#">Leer completa</a>
            </div>
            <div class="col-sm-4 col-xs-12 resena">
              <img src="{{asset("imagenes/videojuegos3.jpg")}}" alt="" class="img-responsive">
              <h3>Titulo</h3>
              <small><span>Por: </span>Gerardo Rodriguez</small>
              <p>Aqui va una frase que resuma la reseña</p>
              <a href="#">Leer completa</a>
            </div>
            <div class="col-sm-4 col-xs-12 resena">
              <img src="{{asset("imagenes/videojuegos3.jpg")}}" alt="" class="img-responsive">
              <h3>Titulo</h3>
              <small><span>Por: </span>Gerardo Rodriguez</small>
              <p>Aqui va una frase que resuma la reseña</p>
              <a href="#">Leer completa</a>
            </div>
          </div>-->
          <a href="{{url("/todasReviews")}}">Ver todas las reseñas >></a>
        </div>
        <!--RESEÑAS-->

        <!--LANZAMIENTOS-->
        <div class="row lanzamientos">
          <div class="col-xs-12">
            <h2 class="col-md-3 col-xs-12 text-left">Últimos Lanzamientos</h2>
            <hr class="col-md-6 col-xs-12 separador ">
          </div>
          <div class="ultimosLanzamientos col-xs-12">
            @foreach ($lanzamientos as $juego)
              <div class="juegoLanzado col-xs-6 col-md-3">
                <img src={{$juego->urlPortada}} alt="" class="col-xs-12 imgJuego">
                <h3 class="col-xs-12">{{$juego->titulo}}</h3>
                <a href="review/crear/nueva/{{Crypt::encrypt($juego->idJuego)}}" class="btn btn-primary">Escribir Reseña</a>
              </div>
            @endforeach
          <!--  <todojuegos></todojuegos>-->

          </div>
          <a href="/TJuegos" class="col-xs-12">Ver más juegos >></a>
        </div>
        <!--LANZAMIENTOS-->


    </div>

    <div class="container-fluid footer">
      <div class="col-xs-12 text-center">
        <p>No te quedes fuera de la comunidad, participa creando tus propias reseñas y noticias</p>
      </div>
      <div class="col-xs-12 text-center">

          <button type="button" name="button" class="btn-primary">Noticia</button>

          <button type="button" name="button" class="btn-primary">Reseña</button>

      </div>
    </div>
@endsection
@section('scripts')
  <script type="text/javascript" src="js/app.js">    </script>
  <script type="text/javascript" src="js/principal.js">    </script>

@endsection
