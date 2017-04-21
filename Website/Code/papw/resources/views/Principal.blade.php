@extends('layouts.master')

@section('estilo','../css/estilos/principal.css')
@section('titulo','Polygaming')

@section('contenido')
  <div class="container text-center contenido">
        <!--CARRUSEL-->
        <div class="col-md-12">
          <div id="carousel-1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-1" data-slide-to="1" class=""></li>
              <li data-target="#carousel-1" data-slide-to="2" class=""></li>
            </ol>

            <div class="carousel-inner" role="listbox ">

              <div class="item active">
                <img src="{{asset("imagenes/videojuegos.jpg")}}" alt="" class=" imgCarrusel">
                <div class="carousel-caption">
                  <h3>Los videojuegos en la historia</h3>
                  <p class="tipo">NOTICIA</p>
                </div>
              </div>
              <div class="item">
                <img src="{{asset("imagenes/videojuegos2.jpg")}}" alt="" class="imgCarrusel">
                <div class="carousel-caption">
                  <h3>pac man cumple 117 años</h3>
                  <p class="tipo">NOTICIA</p>
                </div>
              </div>
              <div class="item">
                <img src="{{asset("imagenes/videojuegos3.jpg")}}" alt="" class=" imgCarrusel">
                <div class="carousel-caption">
                  <h3>Nintendo Switch tendrá nuevos juegos de Mario</h3>
                  <p class="tipo">NOTICIA</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--CARRUSEL-->

        <br />
        <br />

        <!--NUEVO-->
        <div class="col-sm-12 nuevoUsuarios">
          <div class="col-sm-4 col-xs-12">
            <img src="{{asset("imagenes/videojuegos.jpg")}}" alt="" class="img-responsive">
            <p class="tipo">Noticia</p>
            <h3 class=titulo>Esto es una noticia</h3>
          </div>
          <div class="col-sm-4 col-xs-12">
            <img src="{{asset("imagenes/videojuegos.jpg")}}" alt="" class="img-responsive">
            <p class="tipo">Noticia</p>
            <h3 class=titulo>Esto es otra noticia</h3>
          </div>
          <div class="col-sm-4 col-xs-12">
            <img src="{{asset("imagenes/videojuegos.jpg")}}" alt="" class="img-responsive">
            <p class="tipo">Review</p>
            <h3 class=titulo>Esto es una review</h3>
          </div>
        </div>
        <!--NUEVO-->

        <!--NO SE-->
        <div class="col-md-9 no se">
          dfhfgh
        </div>
        <!--NO SE-->

        <!--BARRA LATERAL-->
        <div class="col-md-3 hidden-sm hidden-xs text-center barra">
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
        <div class="col-md-12 hidden-md hidden-lg ultimasResenas">
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
        </div>
        <!--ULTIMAS RESEÑAS-->

        <!--NOTICIAS-->
        <div class="col-md-12 noticias">
          <div class="tituloapartado">
            <h1>Noticias</h1>
          </div>
          <div class="row text-center">
            <div class="col-sm-4 col-xs-12 noticia">
              <img src="{{asset("imagenes/videojuegos2.jpg")}}" alt="" class="img-responsive">
              <h3 class="">Titulo</h3>
              <small><span>Por: </span>Gerardo Rodriguez</small>
              <p>Información adicional acerca de la noticia para atraer la atencion del usuario al usuario...</p>
              <a href="#">Seguir leyendo</a>
            </div>
            <div class="col-sm-4 col-xs-12 noticia">
              <img src="{{asset("imagenes/videojuegos2.jpg")}}" alt="" class="img-responsive">
              <h3 class="">Titulo</h3>
              <small><span>Por: </span>Byron Guevara</small>
              <p>Información adicional acerca de la noticia para atraer la atencion del usuario al usuario...</p>
              <a href="#">Seguir leyendo</a>
            </div>
            <div class="col-sm-4 col-xs-12 noticia">
              <img src="{{asset("imagenes/videojuegos2.jpg")}}" alt="" class="img-responsive">
              <h3 class="">Titulo</h3>
              <small><span>Por: </span>Fernando Reyes</small>
              <p>Información adicional acerca de la noticia para atraer la atencion del usuario al usuario...</p>
              <a href="#">Seguir leyendo</a>
            </div>
          </div>
          <div class="row text-center">
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
          </div>
          <a href="" class=verMasNoticias>Ver todas las noticias</a>
        </div>
        <!--NOTICIAS-->

        <!--Reseñas-->
        <div class="col-md-12 resenas">
          <div class="tituloapartado">
            <h1>Reseñas</h1>
          </div>
          <div class="row text-center ">
            <div class="col-sm-4 col-xs-12 resena">
              <img src="{{asset("imagenes/videojuegos3.jpg")}}" alt="" class="img-responsive">
              <p class="calificacionR">100</p>
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
          </div>
          <div class="row text-center">
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
          </div>
          <a href="">Ver todas las reseñas</a>
        </div>
        <!--RESEÑAS-->




    </div>
@endsection
