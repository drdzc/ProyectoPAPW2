@extends('layouts.master')

@section('estilo','../css/estilos/reviews.css')
@section('titulo','Crear Reseña')

@section('contenido')
  <div class="container-fluid cont text-center">
    <div class="row col-xs-12">

      <form class="" action="/review/guardar" method="post" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{csrf_token()}}">
          <div class="col-xs-12 form-group">
            <label>Portada</label>
              <input class="form-control" type="file" required name="portada" />
          </div>

          <div class="col-xs-12 form-group">
            <label>Titulo</label>
              <input class="form-control" type="text" required name="titulo" />
          </div>
          <div class="col-xs-12 form-group">
            <label>Contenido1</label>
              <textarea class="form-control" name="contenido1" rows="8" cols="80"></textarea>
          </div>
          <div class="col-xs-12 form-group">
            <label>imagen1</label>
              <input class="form-control" type="file" required name="imagen1" />
          </div>
          <div class="col-xs-12 form-group">
            <label>Contenido2</label>
              <textarea class="form-control" name="contenido2" rows="8" cols="80"></textarea>
          </div>
          <div class="col-xs-12 form-group">
            <label>imagen2</label>
              <input class="form-control" type="file" required name="imagen2" />
          </div>
          <div class="col-xs-12 form-group">
            <label>Veredicto</label>
              <textarea class="form-control" name="veredicto" rows="8" cols="80"></textarea>
          </div>
          <div class="col-xs-12 form-group">
            <label>Calificacion</label>
                <input class="form-control" type="text" required name="calificacion" />
          </div>
          <button type="submit" name="button" class="btn btn-primary">Crear</button>
      </form>
    </div>

  </div>
@endsection
