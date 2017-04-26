<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registro</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/estilos/login.css">
</head>
<body>
  <nav class="navbar navbar-static-top">
    <a href="{{route("index")}}" class="navbar-brand">
      <img src="../imagenes/logo.png" alt="Regresar" height="50px" width="70px">
    </a>

  </nav>

  <div class="container-fluid">
    <div class="row center-block logo">
      <div class="col-xs-12 text-center">
          <img  src="../imagenes/logo.png" alt="" class="img-responsive center-block logo" />
      </div>

    </div>

    <div class="row registro center-block">
      <div class=" col-xs-12 center-block">
        <div class="formulario2 center-block">
          <div class=" col-xs-12 encabezado text-center center-block">
            <h1>Crear cuenta</h1>
          </div>
          <p class="col-xs-12 text-center">
            Únete y no te pierdas de nada del mundo del gaming.
          </p>
          <p class="col-xs-12 text-center">
            ¿Ya tienes una cuenta? <a href="{{route("login")}}">Inicia sesion.</a>
          </p>
          <form action="/registrar" method="post">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="col-xs-12 form-group">
              <label>Usuario</label>
              <div class="input-group">
                <span class="input-group-addon " id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                <input class="form-control" type="text" aria-describedby="basic-addon1" name="nombre" required/>
              </div>
            </div>
            <div class="col-xs-12 form-group">
              <label>Correo Electrónico</label>
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
            <div class="col-xs-12 form-group">
              <label class="">Fecha de nacimiento</label>
              <div class="col-xs-12 combo">
                <select class="form-control col-xs-4 combos" name="dia" id="dia"><option value="">Día</option></select>
                <select class="form-control col-xs-4 combos" name="mes" id="mes"><option value="">Mes</option></select>
                <select class="form-control col-xs-4 combos" name="anio" id="anio"><option value="">Año</option></select>
              </div>
            </div>
            <div class="col-xs-12 form-inline">
              <label class="">Sexo</label>
              <div class="col-xs-12 radios">
                <div class="radio">
                  <label class="radios" ><input type="radio" value=0 name="sexo" class="radios" checked>Hombre</label>

                  <label class="radios" ><input type="radio" value=1 name="sexo" >Mujer</label>
                </div>
              </div>
            </div>
            <div class="col-xs-12 form-group ">
            <button type="submit" name="button" class="btn entrar">
              <span class="glyphicon glyphicon-arrow-right"></span> Registrarse
            </button>
            </div>
          </form>
        </div>
    </div>
    </div>
  </div>
</body>
<script type="text/javascript" src="{{asset("js/jquery.js")}}"></script>
<script type="text/javascript" src="{{asset("js/registro.js")}}">

</script>
</html>
