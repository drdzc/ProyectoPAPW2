$(document).ready(function() {
  var actual;
  var divPadre;
  var idN;
  $("body").on('click', "a.borrar", function(e) {
    e.preventDefault();
    actual=$(this);
    divPadre = actual.parent().parent().parent();
    idN=actual.next().next().val();
    $.ajax({
      url: "/eliminarNoticia",
      data: {idNoticia:idN, "_token": $("#token").val()},
      method : "delete",
      success: function(result){
        divPadre.remove();
      },
      error: function(){
        alert("No se pudo eliminar la publicación");
      }
    });
  });

  $("body").on('click', 'a.borrarR', function(e) {
    e.preventDefault();
    actual=$(this);
    divPadre = actual.parent().parent().parent();
    idR = actual.next().next().val();
    $.ajax({
      url: "/eliminarReview",
      data: {idResena:idR, "_token": $("#token").val()},
      method: "delete",
      success: function(result){
        divPadre.remove();
      },
      error:function(){
        alert("No se pudo eliminar la publicación");
      }
    });
  });
});
