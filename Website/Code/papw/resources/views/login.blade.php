<!DOCTYPE html>
<html lang="en">
<head>
  <title>Iniciar sesión</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/estilos/login.css">
</head>
<body>
  <nav class="navbar navbar-static-top">
    <a href="{{route("index")}}" class="navbar-brand">
      <img src="../imagenes/logo.png" alt="" height="50px" width="70px">
      </a>
  </nav>

  <div class="container-fluid">
    @if(Session::has('mensaje_error'))
      {{Session::get('mensaje_error')}}
    @endif
    <div class="row center-block logo">
      <div class="col-xs-12 center-block">
        <div class="center-block text-center img-responsive">
          <img  src="../imagenes/logo.png" alt="" class="img-responsive center-block logo" />
        </div>
      </div>

    </div>
    <div class="row login center-block">
      <div class=" col-xs-12 cont-form center-block  ">
        <div class=" formulario  center-block ">

            <div class=" col-xs-12  encabezado text-center center-block">
              <h1>Iniciar Sesión</h1>
            </div>
            <p class="col-xs-12 text-center">
              ¡Bienvenido! Inicia sesión para continuar
            </p>
            <p class="col-xs-12 text-center">
              ¿Aún no tienes cuenta? <a href="{{route("registro")}}">Crea una, es gratis :).</a>
            </p>
            <form method="post" action="/loguear">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="col-xs-12 form-group">
                <label>Usuario</label>
                <div class="input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                  <input class="form-control" type="email" required name="email" />
                </div>
              </div>
              <div class="col-xs-12 form-group">
                <label>Contraseña</label>
                <div class="input-group">
                  <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                  <input class="form-control" type="password" required name="pass" />
                </div>
              </div>
              <div class="col-xs-12 form-group btnentrar">
              <button type="submit" name="button" class="btn entrar">
                <span class="glyphicon glyphicon-arrow-right"></span> Entrar
              </button>
              </div>
            </form>


        </div>
      </div>
    </div>

  </div>
</body>
</html>
