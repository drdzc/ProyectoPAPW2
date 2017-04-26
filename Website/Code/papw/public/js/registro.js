var cod="";
var meses = ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"];
$(document).ready(function(){
  for(var i=1; i<32; i++){
    cod+="<option value="+i+">"+i+"</option>";
  }
  $("#dia").append(cod);
  cod="";
  for(var i=2018; i>1940; i--){
    cod+="<option value="+i+">"+i+"</option>";
  }
  $("#anio").append(cod);
  cod="";
  for(var i=1; i< 13; i++){
    cod+="<option value="+i+">"+meses[i-1]+"</option>";
  }
  $("#mes").append(cod);
});
