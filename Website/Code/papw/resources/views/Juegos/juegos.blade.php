@extends('layouts.master')

@section('estilo','../css/estilos/juego.css')
@section('titulo','Juegos')

@section('contenido')
  <div class="container-fluid">

    <div class="multiplataforma row text-center">
      <div class="col-xs-12">
        <h2 class="col-md-3 col-xs-12">Multiplataforma</h2>
        <hr class="col-md-6 separador hidden-xs hidden-sm">
      </div>
      <div class="row juegos">
        <div class="col-xs-12 col-md-3 destacado">
          <img src="{{asset("imagenes/zelda.png")}}" alt="" class="img-responsive">
          <h3>The Legend of Zelda: Breath of the wild.</h3>
        </div>

        <div class="col-xs-12 col-md-9 carruselJuegos text-center">
          <div id="carousel-1" class="carousel slide" data-ride="carousel" data-interval="false">
            <ol class="carousel-indicators esconder">
              <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-1" data-slide-to="1" class=""></li>
              <li data-target="#carousel-1" data-slide-to="2" class=""></li>
            </ol>

            <div class="carousel-inner" role="listbox ">

              <div class="item active">
                <div class="row">
                  <div class="juego2 col-xs-3">
                    <img src="{{asset("imagenes/zelda.png")}}" alt="" class="img-responsive">
                    <p class="tituloSlide">Titulo</p>
                  </div>
                  <div class="juego2 col-xs-3">
                    <img src="{{asset("imagenes/zelda.png")}}" alt="" class="img-responsive">
                    <p class="tituloSlide">Titulo</p>
                  </div>
                  <div class="juego2 col-xs-3">
                    <img src="{{asset("imagenes/zelda.png")}}" alt="" class="img-responsive">
                    <p class="tituloSlide">Titulo</p>
                  </div>
                  <div class="juego2 col-xs-3">
                    <img src="{{asset("imagenes/zelda.png")}}" alt="" class="img-responsive">
                    <p class="tituloSlide">Titulo</p>
                  </div>
                </div>
                <div class="row">
                  <div class="juego2 col-xs-3">
                    <img src="{{asset("imagenes/zelda.png")}}" alt="" class="img-responsive">
                    <p class="tituloSlide">Titulo</p>
                  </div>
                  <div class="juego2 col-xs-3">
                    <img src="{{asset("imagenes/zelda.png")}}" alt="" class="img-responsive">
                    <p class="tituloSlide">Titulo</p>
                  </div>
                  <div class="juego2 col-xs-3">
                    <img src="{{asset("imagenes/zelda.png")}}" alt="" class="img-responsive">
                    <p class="tituloSlide">Titulo</p>
                  </div>
                  <div class="juego2 col-xs-3">
                    <img src="{{asset("imagenes/zelda.png")}}" alt="" class="img-responsive">
                    <p class="tituloSlide">Titulo</p>
                  </div>
                </div>
              </div>
              <div class="item">

              </div>
              <div class="item">

              </div>
            </div>
              <!--CONTROLES-->
              <a href="#carousel-1" class="left carousel-control" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              </a>
              <a href="#carousel-1" class="right carousel-control" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              </a>
              <!--CONTROLES-->
          </div>
        </div>
      </div>
    </div>
    <hr class="col-xs-12 hidden-md hidden-lg separador ">

    <!--PS4-->
    <div class="multiplataforma row text-center">
      <div class="col-xs-12">
        <h2 class="col-md-3 col-xs-12">Playstation 4</h2>
        <hr class="col-md-6 separador hidden-xs hidden-sm">
      </div>
      <div class="row juegos">
        <div class="col-xs-12 col-md-3 destacado">
          <img src="{{asset("imagenes/zelda.png")}}" alt="" class="img-responsive">
          <h3>The Legend of Zelda: Breath of the wild.</h3>
        </div>

        <div class="col-xs-12 col-md-9 carruselJuegos text-center">
          <div id="carousel-2" class="carousel slide" data-ride="carousel" data-interval="false">
            <ol class="carousel-indicators esconder">
              <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-1" data-slide-to="1" class=""></li>
              <li data-target="#carousel-1" data-slide-to="2" class=""></li>
            </ol>

            <div class="carousel-inner" role="listbox ">

              <div class="item active">
                <div class="row">
                  <div class="juego2 col-xs-3">
                    <img src="{{asset("imagenes/zelda.png")}}" alt="" class="img-responsive">
                    <p class="tituloSlide">Titulo</p>
                  </div>
                  <div class="juego2 col-xs-3">
                    <img src="{{asset("imagenes/zelda.png")}}" alt="" class="img-responsive">
                    <p class="tituloSlide">Titulo</p>
                  </div>
                  <div class="juego2 col-xs-3">
                    <img src="{{asset("imagenes/zelda.png")}}" alt="" class="img-responsive">
                    <p class="tituloSlide">Titulo</p>
                  </div>
                  <div class="juego2 col-xs-3">
                    <img src="{{asset("imagenes/zelda.png")}}" alt="" class="img-responsive">
                    <p class="tituloSlide">Titulo</p>
                  </div>
                </div>
                <div class="row">
                  <div class="juego2 col-xs-3">
                    <img src="{{asset("imagenes/zelda.png")}}" alt="" class="img-responsive">
                    <p class="tituloSlide">Titulo</p>
                  </div>
                  <div class="juego2 col-xs-3">
                    <img src="{{asset("imagenes/zelda.png")}}" alt="" class="img-responsive">
                    <p class="tituloSlide">Titulo</p>
                  </div>
                  <div class="juego2 col-xs-3">
                    <img src="{{asset("imagenes/zelda.png")}}" alt="" class="img-responsive">
                    <p class="tituloSlide">Titulo</p>
                  </div>
                  <div class="juego2 col-xs-3">
                    <img src="{{asset("imagenes/zelda.png")}}" alt="" class="img-responsive">
                    <p class="tituloSlide">Titulo</p>
                  </div>
                </div>
              </div>
              <div class="item">

              </div>
              <div class="item">

              </div>
            </div>
              <!--CONTROLES-->
              <a href="#carousel-2" class="left carousel-control" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              </a>
              <a href="#carousel-2" class="right carousel-control" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              </a>
              <!--CONTROLES-->
          </div>
        </div>
      </div>
    </div>
    <!--PS4-->
    <hr class="col-xs-12 hidden-md hidden-lg separador ">

    <!--XBONE-->
    <div class="multiplataforma row text-center">
      <div class="col-xs-12">
        <h2 class="col-md-3 col-xs-12">Xbox One</h2>
        <hr class="col-md-6 separador hidden-xs hidden-sm">
      </div>
      <div class="row juegos">
        <div class="col-xs-12 col-md-3 destacado">
          <img src="{{asset("imagenes/zelda.png")}}" alt="" class="img-responsive">
          <h3>The Legend of Zelda: Breath of the wild.</h3>
        </div>

        <div class="col-xs-12 col-md-9 carruselJuegos text-center">
          <div id="carousel-2" class="carousel slide" data-ride="carousel" data-interval="false">
            <ol class="carousel-indicators esconder">
              <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-1" data-slide-to="1" class=""></li>
              <li data-target="#carousel-1" data-slide-to="2" class=""></li>
            </ol>

            <div class="carousel-inner" role="listbox ">

              <div class="item active">
                <div class="row">
                  <div class="juego2 col-xs-3">
                    <img src="{{asset("imagenes/zelda.png")}}" alt="" class="img-responsive">
                    <p class="tituloSlide">Titulo</p>
                  </div>
                  <div class="juego2 col-xs-3">
                    <img src="{{asset("imagenes/zelda.png")}}" alt="" class="img-responsive">
                    <p class="tituloSlide">Titulo</p>
                  </div>
                  <div class="juego2 col-xs-3">
                    <img src="{{asset("imagenes/zelda.png")}}" alt="" class="img-responsive">
                    <p class="tituloSlide">Titulo</p>
                  </div>
                  <div class="juego2 col-xs-3">
                    <img src="{{asset("imagenes/zelda.png")}}" alt="" class="img-responsive">
                    <p class="tituloSlide">Titulo</p>
                  </div>
                </div>
                <div class="row">
                  <div class="juego2 col-xs-3">
                    <img src="{{asset("imagenes/zelda.png")}}" alt="" class="img-responsive">
                    <p class="tituloSlide">Titulo</p>
                  </div>
                  <div class="juego2 col-xs-3">
                    <img src="{{asset("imagenes/zelda.png")}}" alt="" class="img-responsive">
                    <p class="tituloSlide">Titulo</p>
                  </div>
                  <div class="juego2 col-xs-3">
                    <img src="{{asset("imagenes/zelda.png")}}" alt="" class="img-responsive">
                    <p class="tituloSlide">Titulo</p>
                  </div>
                  <div class="juego2 col-xs-3">
                    <img src="{{asset("imagenes/zelda.png")}}" alt="" class="img-responsive">
                    <p class="tituloSlide">Titulo</p>
                  </div>
                </div>
              </div>
              <div class="item">

              </div>
              <div class="item">

              </div>
            </div>
              <!--CONTROLES-->
              <a href="#carousel-2" class="left carousel-control" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              </a>
              <a href="#carousel-2" class="right carousel-control" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              </a>
              <!--CONTROLES-->
          </div>
        </div>
      </div>
    </div>
    <!--XBONE-->
    <hr class="col-xs-12 hidden-md hidden-lg separador ">

    <!--SWITCH-->
    <div class="multiplataforma row text-center">
      <div class="col-xs-12">
        <h2 class="col-md-3 col-xs-12">Switch</h2>
        <hr class="col-md-6 separador hidden-xs hidden-sm">
      </div>
      <div class="row juegos">
        <div class="col-xs-12 col-md-3 destacado">
          <img src="{{asset("imagenes/zelda.png")}}" alt="" class="img-responsive">
          <h3>The Legend of Zelda: Breath of the wild.</h3>
        </div>

        <div class="col-xs-12 col-md-9 carruselJuegos text-center">
          <div id="carousel-2" class="carousel slide" data-ride="carousel" data-interval="false">
            <ol class="carousel-indicators esconder">
              <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-1" data-slide-to="1" class=""></li>
              <li data-target="#carousel-1" data-slide-to="2" class=""></li>
            </ol>

            <div class="carousel-inner" role="listbox ">

              <div class="item active">
                <div class="row">
                  <div class="juego2 col-xs-3">
                    <img src="{{asset("imagenes/zelda.png")}}" alt="" class="img-responsive">
                    <p class="tituloSlide">Titulo</p>
                  </div>
                  <div class="juego2 col-xs-3">
                    <img src="{{asset("imagenes/zelda.png")}}" alt="" class="img-responsive">
                    <p class="tituloSlide">Titulo</p>
                  </div>
                  <div class="juego2 col-xs-3">
                    <img src="{{asset("imagenes/zelda.png")}}" alt="" class="img-responsive">
                    <p class="tituloSlide">Titulo</p>
                  </div>
                  <div class="juego2 col-xs-3">
                    <img src="{{asset("imagenes/zelda.png")}}" alt="" class="img-responsive">
                    <p class="tituloSlide">Titulo</p>
                  </div>
                </div>
                <div class="row">
                  <div class="juego2 col-xs-3">
                    <img src="{{asset("imagenes/zelda.png")}}" alt="" class="img-responsive">
                    <p class="tituloSlide">Titulo</p>
                  </div>
                  <div class="juego2 col-xs-3">
                    <img src="{{asset("imagenes/zelda.png")}}" alt="" class="img-responsive">
                    <p class="tituloSlide">Titulo</p>
                  </div>
                  <div class="juego2 col-xs-3">
                    <img src="{{asset("imagenes/zelda.png")}}" alt="" class="img-responsive">
                    <p class="tituloSlide">Titulo</p>
                  </div>
                  <div class="juego2 col-xs-3">
                    <img src="{{asset("imagenes/zelda.png")}}" alt="" class="img-responsive">
                    <p class="tituloSlide">Titulo</p>
                  </div>
                </div>
              </div>
              <div class="item">

              </div>
              <div class="item">

              </div>
            </div>
              <!--CONTROLES-->
              <a href="#carousel-2" class="left carousel-control" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              </a>
              <a href="#carousel-2" class="right carousel-control" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              </a>
              <!--CONTROLES-->
          </div>
        </div>
      </div>
    </div>
    <!--SWITCH-->
    <hr class="col-xs-12 hidden-md hidden-lg separador ">

  </div>
@endsection
