@extends('layouts.master')

@section('estilo','../css/estilos/noticias.css')
@section('titulo','Crear noticia')

@section('contenido')
  <div class="container-fluid cont text-center">
    <div class="row col-xs-12">

      <form class="" action="/noticia/guardar" method="post" enctype="multipart/form-data">
          <input type="hidden" name="_token" value="{{csrf_token()}}">

          <div class="col-xs-12 form-group">
            <label>Titulo</label>
              <input class="form-control" type="text" required name="titulo" />
          </div>
          <div class="col-xs-12 form-group">
            <label>Subtitulo</label>
              <input class="form-control" type="text"  name="subtitulo" />
          </div>
          <div class="col-xs-12 form-group">
            <label>Banner</label>
              <input class="form-control" type="file" required name="imagen" />
          </div>
          <div class="col-xs-12 form-group">
            <label>Contenido</label>
              <textarea class="form-control" name="contenido" rows="8" cols="80"></textarea>
          </div>
          <button type="submit" name="button" class="btn btn-primary">Crear</button>
      </form>
    </div>

  </div>
@endsection
