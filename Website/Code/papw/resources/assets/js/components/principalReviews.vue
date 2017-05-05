<template lang="html">
  <div class="">
    <div class="col-sm-4 col-xs-12 resena" v-for="review in reviews" :contenido="review">
      <img :src=review.urlImagen alt="" class="img-responsive">
      <h3>{{review.titulo}}</h3>
      <small><span>Por: </span>{{review.usuarios[0].nombre}}</small>
      <p>Aqui va una frase que resuma la reseña</p>
      <a :href="'review/'+review.titulo+'/'+review.idResena">Leer completa</a>
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
          this.$http.get("../api/todoResenas").then(function (response){
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
