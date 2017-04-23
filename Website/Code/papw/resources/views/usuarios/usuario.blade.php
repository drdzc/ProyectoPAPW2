@extends('layouts.master')

@section('estilo','../css/estilos/perfil.css')
@section('titulo','Perfil')

@section('contenido')
<div class="contenido container-fluid">
  <!--BARRA IZQUIERDA-->
  <div class="InfoPerfil col-md-4 col-xs-12 text-center">
    <div class="c">
      <img src="{{asset("imagenes/videojuegos.jpg")}}" alt="" class=" img-thumbnail  "/>

    <div>
      <h4 class="nombre">Gerardo Daniel Rodriguez Cardona</h4>
    </div>
    </div>
  </div>
  <!--BARRA IZQUIERDA-->
  <!--CENTRO-->
  <div class="publicaciones col-md-8 col-xs-12">
    <div class=" row crearContenido text-center">
      <a href="#" class=col-xs-6><img src="{{asset("imagenes/noticia.png")}}" alt="" class="img-responsive "></a>
      <a href="#" class=col-xs-6><img src="{{asset("imagenes/noticia.png")}}" alt="" class="img-responsive "></a>
      <button type="button" name="button" class="col-xs-6">Crear Noticia</button>
      <button type="button" name="button" class="col-xs-6">Crear Reseña</button>
      <input type="file" class="" />
      <input type="file" class="" />
    </div>
    <h3>Publicaciones</h3>
    <div class="verContenido">

      <div id="exTab1" class="">
        <ul  class="nav nav-tabs">
    			<li class="active col-xs-6">
            <a  href="#1a" data-toggle="tab"><img src="{{asset("imagenes/noticia.png")}}" alt="" class="img-responsive ">Ver tus noticias</a>
    			</li>
    			<li class="col-xs-6"><a href="#2a" data-toggle="tab"><img src="{{asset("imagenes/noticia.png")}}" alt="" class="img-responsive ">Ver tus Reseñas</a>
    			</li>
  		</ul>

			<div class="tab-content clearfix ">
			  <div class="tab-pane active panelNoticias" id="1a">

          <div class="noticia row">
            <div class="col-xs-12">
              <img src="{{asset("imagenes/videojuegos.jpg")}}" alt="" class="col-xs-12 col-md-3">
              <div class="info  text-center col-md-9 col-xs-12">
                <h2 class="col-xs-10">TItulo de la noticia</h2>
                <a href="#" class=col-xs-1><span class="glyphicon glyphicon-pencil"></span></a>
                <a href="#" class=col-xs-1><span class="glyphicon glyphicon-remove"></span></a>
                <p class="col-xs-12 text-left">Aqui va el texto inicial de la noticia</p>
              </div>
            </div>
          </div>
          <div class="noticia row">
            <div class="col-xs-12">
              <img src="{{asset("imagenes/videojuegos2.jpg")}}" alt="" class="col-xs-12 col-md-3">
              <div class="info  text-center col-md-9 col-xs-12">
                <h2 class="col-xs-10">TItulo de la noticia</h2>
                <a href="#" class=col-xs-1><span class="glyphicon glyphicon-pencil"></span></a>
                <a href="#" class=col-xs-1><span class="glyphicon glyphicon-remove"></span></a>
                <p class="col-xs-12 text-left">Aqui va el texto inicial de la noticia</p>
              </div>
            </div>
          </div>
          <div class="noticia row">
            <div class="col-xs-12">
              <img src="{{asset("imagenes/videojuegos3.jpg")}}" alt="" class="col-xs-12 col-md-3">
              <div class="info  text-center col-md-9 col-xs-12">
                <h2 class="col-xs-10">TItulo de la noticia</h2>
                <a href="#" class=col-xs-1><span class="glyphicon glyphicon-pencil"></span></a>
                <a href="#" class=col-xs-1><span class="glyphicon glyphicon-remove"></span></a>
                <p class="col-xs-12 text-left">Aqui va el texto inicial de la noticia</p>
              </div>
            </div>
          </div>

				</div>
				<div class="tab-pane panelResenas" id="2a">
          <div class="resena row">
            <div class="col-xs-12">
              <img src="{{asset("imagenes/zelda.png")}}" alt="" class="col-xs-12 col-md-3">
              <div class="info  text-center col-md-9 col-xs-12">
                <h2 class="col-xs-10">TItulo de la Reseña</h2>
                <a href="#" class=col-xs-1><span class="glyphicon glyphicon-pencil"></span></a>
                <a href="#" class=col-xs-1><span class="glyphicon glyphicon-remove"></span></a>
                <p class="col-xs-12 text-center">100</p>
              </div>
            </div>
          </div>
				</div>
			</div>

  </div>


    </div>
    <div class="ContenidoPerfil">

    </div>
  </div>
  <!--CENTRO-->

</div>
@endsection
