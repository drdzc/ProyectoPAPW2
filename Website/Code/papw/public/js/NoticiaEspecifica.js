$(document).ready(function() {
  //Cargar todo
  $.ajax({
    url: '/noticiaOtros',
    type: 'GET',
  //  dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
    data: {id:$("#idN").val()},
    success: function(result){
    //  var obj=JSON.parse(result.noticias.data);
    var noticias=result.noticias.data;
    var comentarios = result.comentarios.data;
    var html='';
    $.each(noticias,function(index, el) {
      html += '<div class="relacionado col-sm-3">'+
        '<a href="/noticia/'+el.titulo+'/'+el.idNoticia+'"><img src="'+el.urlBanner+'" alt="" class="img-responsive"></a>'+
        '<p class="tituloSlide">'+el.titulo+'</p>'+
      '</div>';
    });
      $(".relacionados").append(html);
      var html2='';
      var link='';
      $.each(comentarios,function(index, el) {
        html2+='<div class="comentario col-xs-12">'+
          '<img src="'+el.usuarios[0].urlFoto+'" alt="" class="img-thumbnail hidden-xs col-sm-1">'+
          '<div class="usuario col-xs-12 col-sm-11">';
          if(el.idUsuario==result.id)
            link='/perfil';
            else {
              link='#'
            }
            html2+='<a href="'+link+'">'+el.usuarios[0].nombre+'</a>'+
            '<p>'+el.texto+'</p>'+
            '<small><span class="glyphicon glyphicon-calendar"></span>'+el.created_at+'</small>'+
          '</div>'+
            '<hr class="col-xs-12">'+
        '</div>';
      });
      if(html2=='')
      html2='<p>No hay comentarios en esta publicación</p>';
      $(".comentarios").append(html2);
    },
  });



  $("#comentar").on('click', function(event) {
    event.preventDefault();
    $.ajax({
      url: '/comentarNoticia',
      type: 'POST',
      //dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
      data: { id:$("#idN").val(), texto: $("#textoComentario").val(), "_token": $("#token").val() },
      success: function(result){
        var html='<div class="comentario col-xs-12">'+
          '<img src="'+result.urlImagen+'" alt="" class="img-thumbnail hidden-xs col-sm-1">'+
          '<div class="usuario col-xs-12 col-sm-11">'+
          '  <a href="#">'+result.nombre+'</a>'+
            '<p>'+result.texto+'</p>'+
            '<small><span class="glyphicon glyphicon-calendar"></span>'+result.fecha.date +'</small>'+
          '</div>'+
          '<hr class="col-xs-12">'+
        '</div>';
      $(".comentarios").append(html);
      $("#textoComentario").val('');
      },
    });

    /* Act on the event */

  });
});
