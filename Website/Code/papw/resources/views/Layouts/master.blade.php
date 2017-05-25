<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" type="text/css" href="{{asset("css/bootstrap.min.css")}}">
  <link rel="stylesheet" type="text/css" href="{{asset("css/estilos/consistencia.css")}}">
  <link rel="stylesheet" type="text/css" href="@yield('estilo')" />
  <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
  @section('estilos')
  @show
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('titulo')</title>
  <script>
          window.Laravel = <?php echo json_encode([
              'csrfToken' => csrf_token(),
          ]); ?>
        </script>
</head>
<body>
  <!--NAVBAR-->
  <header>

    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a href="{{url('/principal')}}" class="navbar-brand"><img src="{{asset("imagenes/logo.png")}}" alt=""></a>
        </div>

        <div class="collapse navbar-collapse  " id="navbar-1">
          <ul class="nav navbar-nav categorias">
            <li class=""><a href="{{url('/todasNoticias')}}" class="texto">Noticias</a></li>
            <li><a href="{{url('/todasReviews')}}" class="texto">Reseñas</a></li>
            <li><a href="{{url('/TJuegos')}}" class="texto">Juegos</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right perfilUL ">
            <li class="a">
                <a href="{{url('/perfil')}}" class=""><img src="{{asset("imagenes/logo.png")}}" alt="" class="img-circle perfil"></a>
            </li>
            <!--
            <li class="dropdown perfil">

              <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button"><span class="caret"></span></a>
              <ul class="dropdown-menu perfilULLI">
                <li><a href="#">Ir a Perfil</a></li>
                <li><a href="#">Editar Perfil</a></li>
                <li  class="divider"></li>
                <li>
                  <a href="">Salir</a>
                </li>
            </ul>
          </li>-->
          <li>
            <a href="{{route("logout")}}" class="texto">Salir</a>
          </li>
          </ul>
          <form method="post" action="/buscar" class="navbar-form navbar-right" role="search">
            <div class="input-group">
              <input type="hidden" name="_token" id="token" value="{{csrf_token()}}">
              <input type="text" id="buscar" class="form-control" placeholder="buscar" name="textoBuscar">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="submit" id="btnBuscar" ><span class="glyphicon glyphicon-search"></span></button>
              </span>
            </div>
          </form>

        </div>

      </div>
    </nav>
  </header>

  <!--CONTENIDO-->
  @section('contenido')
  @show
  <!--CONTENIDO-->

  <!--SCRIPTS-->
  <script type="text/javascript" src="{{asset("js/jquery.js")}}"></script>
  <script type="text/javascript" src="{{asset("js/bootstrap.min.js")}}"></script>
  <script type="text/javascript" src="{{asset("js/jcanvas.js")}}">  </script>
  <!--<script type="text/javascript" src="{{asset("js/calificacion.js")}}"></script>-->
  <script type="text/javascript" src="{{asset("js/vue.js")}}"></script>
  <script type="text/javascript" src="{{asset("js/busquedaMaster.js")}}">
  </script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
  @section('scripts')
  @show

</body>
</html>
