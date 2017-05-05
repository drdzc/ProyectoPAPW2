<template lang="html">
  <div class="">
    <div class="juegoLanzado col-xs-6 col-md-3" v-for="juego in juegos" :contenido="juego">
      <img :src=juego.urlPortada alt="" class="img-responsive">
      <h3>{{juego.titulo}}</h3>
      <a href="#" class="btn btn-primary">Escribir Reseña</a>
    </div>
  </div>
</template>

<script>
  export default{
    //datos del script que se van a poner en los elementos creados
    data(){
      return{
        juegos : []
      }
    },
    props : ['contenido'],
    //funciones que van a traer los datos
    methods: {
      traerJuegos : function(){
          this.$http.get("../api/todoJuegos").then(function (response){
            this.juegos = response.data.data;
               console.log(response.data.data);

          });
      }
    },
    //funcion que se ejecuta al cargar la pagina
      mounted(){

        this.traerJuegos();
      }
  }
</script>

<style lang="css">
</style>
