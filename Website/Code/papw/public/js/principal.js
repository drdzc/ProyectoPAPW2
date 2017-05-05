$(document).ready(function (){
  $.ajax({
    url: "/carruselRelevantes",
    success: function(result){
      alert("hola");
      //checar lo del html :'v
    },
    error: {

    }
  });
});
