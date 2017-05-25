$(document).ready(function() {
  $("#comentar").on('click', function(event) {
    event.preventDefault();
    $.ajax({
      url: '/comentarReview',
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
      $(".comentarios").prepend(html);
      $("#textoComentario").val('');
      },
    });
});
});
