@extends('layouts.master')

@section('estilo','../css/estilos/perfil.css')
@section('titulo','Perfil')

@section('contenido')

<div class="contenido container-fluid">
  <!--BARRA IZQUIERDA-->
  <div class="InfoPerfil col-md-4 col-xs-12 text-center">
    <div class="c">

      @if(Auth::user()->urlFoto==null)
        <img src="{{asset("imagenes/nopic.png")}}" alt="" class=" img-thumbnail  "/>
      @else
        <img src="{{asset(Auth::user()->urlFoto)}}" alt="" class=" img-thumbnail  "/>
      @endif

    <div>
      <h4 class="nombre">{{Auth::user()->nombre}}</h4>
      <h4 class="nombre">Es miembro desde {{Auth::user()->created_at}}</h4>
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

			<div class="tab-content clearfix " id="app">

			  <div class="tab-pane active panelNoticias" id="1a">
          <noticia></noticia>
				</div>

				<div class="tab-pane panelResenas" id="2a">
            <reviews></reviews>
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

@section('scripts')
  <script type="text/javascript" src="js/app.js">    </script>

@endsection
