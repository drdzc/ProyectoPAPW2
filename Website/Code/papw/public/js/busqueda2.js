$(document).ready(function() {
  setFecha();
  var fecha1=$("#fecha1").val();
  var fecha2=$("#fecha2").val();


  $("#fecha1").change(function(){
    fecha1 = $(this).val();
  });

  $("#fecha2").change(function(){
    fecha2 = $(this).val();
  });
  var url='';

  $("#btnBuscar2").click(function(e){
    e.preventDefault();
    var titulo = $("#titulo").val();
    var autor = $("#autor").val();
    var token=$("#token").val();
    var busqueda=0;
    if(titulo != ""){//nos dieron el titulo
      busqueda=1;     //buscar por titulo
      if(autor != ""){//nos dieron el titulo y el autor
        busqueda=2;   //buscar por titulo y autr
        if(fecha1!=fecha2) //nos dieron el titulo, el autor y fechas diferentes
          busqueda=3;   //buscar por titulo y autor entre fechas
        else            //nos dieron el titulo, el autor pero fechas iguales
          busqueda=2;     //buscar por titulo y autor
      }
      else{
        if(fecha1!=fecha2){ //nos dieron el titulo, sin autor y con fechas diferentes
          busqueda=4; //buscar por titulo y fecha
        }
        else {
          busqueda=1;     //nos dieron el titulo, sin autor y con fechas iguales //buscar por titulo
        }

      }
    }
    else{
        if(autor!=""){ //nos dieron el autor sin titulo
          busqueda=5; //buscar por autor
          if(fecha1!=fecha2) //nos dieron el autor sin titulo y con fechas diferentes
            busqueda=6; //buscar por autor y fecha
          else
            busqueda=5; //nos dieron el autor sin titulo y con fechas iguales  //buscar por autor
        }
        else {  //nos dieron las fechas sin autor ni titulo
            if(fecha1!=fecha2)
              busqueda=7; //buscar por fecha, sin titulo ni autor
              else {
                busqueda=0 //no buscar por nada, mandar alert;
              }
        }
    }
    $.ajax({
      url: "/buscarFiltros",
      method: "post",
      data: {tituloParam:titulo, autorParam:autor, fecha1Param:fecha1, fecha2Param:fecha2, busquedaParam:busqueda, "_token":token},
      success : function(result){
        if(busqueda==0)
        alert('No se especificaron parametros para la busqueda');
      }
    });

  });

});


function setFecha(){
  var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!

var yyyy = today.getFullYear();
if(dd<10){dd='0'+dd} if(mm<10){mm='0'+mm} today = yyyy+'-'+mm+'-'+dd;
  $("#fecha1").val(today);
  $("#fecha2").val(today);
}
