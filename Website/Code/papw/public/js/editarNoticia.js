$(document).ready(function() {

  $("#guardar").click(function(event) {
    $("#tituloH").val($("#tituloP").html());
    $("#subtituloH").val($("#subtituloP").html());
    $("#textoH").val($("#textoP").html());
    });

  $("#imgEditable").click(function(event) {
    $(this).next().trigger('click');
  });

  $("#banner").change(function(){
    if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#imgEditable').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
  });

});
