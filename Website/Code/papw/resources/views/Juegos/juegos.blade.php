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
          <img src="{{asset($multi[0]->urlPortada)}}" alt="" class="img-responsive">
          <h3>{{$multi[0]->titulo}}</h3>
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

                  @for ($i=1; $i < 5 ; $i++)
                    @if (!empty($multi[$i]))
                      <div class="juego2 col-xs-3">
                        <a href="juego/{{$multi[$i]->titulo}}"><img src="{{asset($multi[$i]->urlPortada)}}" alt="" class="img-responsive"></a>
                        <p class="tituloSlide">{{$multi[$i]->titulo}}</p>
                      </div>
                    @endif
                  @endfor
                </div>

              </div>
              <div class="item">
                @for ($i=5; $i < 9 ; $i++)
                  @if (!empty($multi[$i]))
                    <div class="juego2 col-xs-3">
                      <a href="juego/{{$multi[$i]->titulo}}"><img src="{{asset($multi[$i]->urlPortada)}}" alt="" class="img-responsive"></a>
                      <p class="tituloSlide">{{$multi[$i]->titulo}}</p>
                    </div>
                  @endif
                @endfor
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
          <img src="{{asset($ps4[0]->urlPortada)}}" alt="" class="img-responsive">
          <h3>{{$ps4[0]->titulo}}</h3>
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
                  @for ($i=1; $i < 5 ; $i++)
                    @if (!empty($ps4[$i]))
                      <div class="juego2 col-xs-3">
                        <a href="juego/{{$ps4[$i]->titulo}}"><img src="{{asset($ps4[$i]->urlPortada)}}" alt="" class="img-responsive"></a>
                        <p class="tituloSlide">{{$ps4[$i]->titulo}}</p>
                      </div>
                    @endif
                  @endfor
                </div>
              </div>
              <div class="item">
                @for ($i=5; $i < 9 ; $i++)
                  @if (!empty($ps4[$i]))
                    <div class="juego2 col-xs-3">
                      <a href="juego/{{$ps4[$i]->titulo}}"><img src="{{asset($ps4[$i]->urlPortada)}}" alt="" class="img-responsive"></a>
                      <p class="tituloSlide">{{$ps4[$i]->titulo}}</p>
                    </div>
                  @endif
                @endfor
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
          <img src="{{asset($xbone[0]->urlPortada)}}" alt="" class="img-responsive">
          <h3>{{$xbone[0]->titulo}}</h3>
        </div>
        <div class="col-xs-12 col-md-9 carruselJuegos text-center">
          <div id="carousel-3" class="carousel slide" data-ride="carousel" data-interval="false">
            <ol class="carousel-indicators esconder">
              <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-1" data-slide-to="1" class=""></li>
              <li data-target="#carousel-1" data-slide-to="2" class=""></li>
            </ol>

            <div class="carousel-inner" role="listbox ">

              <div class="item active">
                <div class="row">
                  <div class="row">
                    @for ($i=1; $i < 5 ; $i++)
                      @if (!empty($xbone[$i]))
                        <div class="juego2 col-xs-3">
                          <a href="juego/{{$xbone[$i]->titulo}}"><img src="{{asset($xbone[$i]->urlPortada)}}" alt="" class="img-responsive"></a>
                          <p class="tituloSlide">{{$xbone[$i]->titulo}}</p>
                        </div>
                      @endif
                    @endfor
                </div>
              </div>
              <div class="item">
                @for ($i=5; $i < 9 ; $i++)
                  @if (!empty($xbone[$i]))
                    <div class="juego2 col-xs-3">
                      <a href="juego/{{$xbone[$i]->titulo}}"><img src="{{asset($xbone[$i]->urlPortada)}}" alt="" class="img-responsive"></a>
                      <p class="tituloSlide">{{$xbone[$i]->titulo}}</p>
                    </div>
                  @endif
                @endfor
              </div>
              <div class="item">

              </div>
            </div>
              <!--CONTROLES-->
              <a href="#carousel-3" class="left carousel-control" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              </a>
              <a href="#carousel-3" class="right carousel-control" role="button" data-slide="next">
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
          <img src="{{asset($switch[0]->urlPortada)}}" alt="" class="img-responsive">
          <h3>{{$switch[0]->titulo}}</h3>
        </div>

        <div class="col-xs-12 col-md-9 carruselJuegos text-center">
          <div id="carousel-4" class="carousel slide" data-ride="carousel" data-interval="false">
            <ol class="carousel-indicators esconder">
              <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-1" data-slide-to="1" class=""></li>
              <li data-target="#carousel-1" data-slide-to="2" class=""></li>
            </ol>

            <div class="carousel-inner" role="listbox ">

              <div class="item active">
                <div class="row">
                  <div class="row">
                    @for ($i=1; $i < 5 ; $i++)
                      @if (!empty($switch[$i]))
                        <div class="juego2 col-xs-3">
                          <a href="juego/{{$switch[$i]->titulo}}"><img src="{{asset($switch[$i]->urlPortada)}}" alt="" class="img-responsive"></a>
                          <p class="tituloSlide">{{$switch[$i]->titulo}}</p>
                        </div>
                      @endif
                    @endfor
                </div>
                </div>
              </div>
              <div class="item">
                @for ($i=5; $i < 9 ; $i++)
                  @if (!empty($switch[$i]))
                    <div class="juego2 col-xs-3">
                      <a href="juego/{{$switch[$i]->titulo}}"><img src="{{asset($switch[$i]->urlPortada)}}" alt="" class="img-responsive"></a>
                      <p class="tituloSlide">{{$switch[$i]->titulo}}</p>
                    </div>
                  @endif
                @endfor
              </div>
              <div class="item">

              </div>
            </div>
              <!--CONTROLES-->
              <a href="#carousel-4" class="left carousel-control" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              </a>
              <a href="#carousel-4" class="right carousel-control" role="button" data-slide="next">
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
