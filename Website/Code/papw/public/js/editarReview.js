$(document).ready(function() {
  $("#guardar").click(function(event) {
    $("#tituloH").val($("#tituloP").html());
    $("#c1H").val($("#c1P").html());
    $("#c2H").val($("#c2P").html());
    $("#veredictoH").val($("#veredictoP").html());
    $("#calificacionH").val($("#calificacionP").html());
    $("#fraseH").val($("#fraseP").html());
  });

  $(".imgEditable").click(function(event) {
    $(this).next().trigger('click');
  });

  $("#banner").change(function(){
    if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#bannerIMG').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
  });

  $("#imagen1").change(function(){
    if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#img').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
  });

  $("#imagen2").change(function(){
    if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#img2').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
  });

});
