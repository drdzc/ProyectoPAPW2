@extends('layouts.master')
@section('estilos')
  <link rel="stylesheet" type="text/css" href="{{asset('css/estilos/reviews.css')}}" />
@endsection
@section('titulo','ReseñaPrueba')

@section('contenido')
  @if($datos)
  <div class="container-fluid cont text-center">
    <div class="row col-sm-12 presentacion  text-center">
      <div class="lel">
        <img src="{{asset("imagenes/banner.jpg")}}" alt="" class="img-responsive imgJuego">
        <div class="textoImagen">
          <h1>{{$datos[0]->titulo}}</h1>
          <p>{{$datos[0]->nombre}} | info de cuando </p>
        </div>
      </div>

    </div>
    <div class="row">
      <div class="col-md-8 col-xs-12">
        <p class="textoResena">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <p class="textoResena">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="col-md-4 col-xs-12"><img src="{{asset($datos[0]->urlImagen)}}" alt="" class="img-responsive imagen"></div>
    </div>
    <div class="row">
      <div class="col-md-8  col-md-push-4  col-xs-12">  <p class="textoResena">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
          <div class="col-md-8 col-md-push-4 col-xs-12">  <p class="textoResena">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
          <div class="col-md-4 col-md-pull-8 col-xs-12">
          <img src="../imagenes/logo.png" alt="" class="img-responsive imagen">
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
        <p>Aqui va el texto del veredicto final</p>
      </div>
      <div class="calificacion col-xs-12">
        100
      </div>
    </div>

    <!--COMENTARIOS-->
    <div class="contenedor col-md-12">
      <div class="row col-md-12 seccionComentarios text-left">
        <div class="">
          <h2>Comentarios</h2>
        </div>

        <form class="" id="formComentar" method="post">
          <input type="hidden" name="_token" id="token" value="{{csrf_token()}}">
          <input type="hidden" name="id" id="idN" value="{{$datos[0]->idResena}}">
          <div class="comentar col-xs-12">
            <img src="{{asset(Auth::user()->urlFoto)}}" alt="" class="img-thumbnail hidden-xs col-md-2">
            <div class="usuario col-xs-12 col-md-10">
              <textarea name="name" id="textoComentario" rows="8" cols="80" placeholder="Deja tu comentario :)." class="form-control"></textarea>
            </div>
          </div>
          <div class="col-xs-12 text-right">
            <button type="button" name="button" class="btn boton" id="comentar">Comentar</button>
          </div>
        </form>
        <div class="comentarios">
          @foreach ($comentarios as $comentario)
            <div class="comentario col-xs-12">
              <img src="{{asset("$comentario->urlFoto")}}" alt="" class="img-thumbnail hidden-xs col-sm-1">
              <div class="usuario col-xs-12 col-sm-11">
                <a href="#">{{$comentario->usuarios[0]->nombre}}</a>
                <p>{{$comentario->texto}}</p>
                <small><span class="glyphicon glyphicon-calendar"></span>{{$comentario->created_at}}</small>
              </div>
                <hr class="col-xs-12">
            </div>
          @endforeach
        </div>

        {{$comentarios->links()}}
      </div>
    </div>




    <!--COMENTARIOS-->
  </div>
@endif
@endsection

@section('scripts')
  <script type="text/javascript" src={{asset("js/ReviewEspecifica.js")}}>

  </script>
@endsection
