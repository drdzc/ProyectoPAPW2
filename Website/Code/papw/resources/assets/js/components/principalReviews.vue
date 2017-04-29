<template lang="html">
  <div class="">
    <div class="col-sm-4 col-xs-12 resena" v-for="review in reviews" :contenido="review ">
      <img src="{{asset("imagenes/videojuegos3.jpg")}}" alt="" class="img-responsive">
      <h3>Titulo</h3>
      <small><span>Por: </span>Gerardo Rodriguez</small>
      <p>Aqui va una frase que resuma la reseña</p>
      <a href="#">Leer completa</a>
    </div>
  </div>
</template>

<script>
  export default{
    //datos del script que se van a poner en los elementos creados
    data(){
      return{
        reviews : []
      }
    },
    props : ['contenido'],
    //funciones que van a traer los datos
    methods: {
      traerReviews : function(){
          this.$http.get("../api/todoNoticias").then(function (response){
            this.reviews = response.data.data;
               console.log(response.data.data);

          });
      }
    },
    //funcion que se ejecuta al cargar la pagina
      mounted(){

        this.traerReviews();
      }
  }
</script>

<style lang="css">
</style>
