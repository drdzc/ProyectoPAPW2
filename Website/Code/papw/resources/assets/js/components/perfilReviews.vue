<template lang="html">
  <div class="">
    <div class="resena row" v-for="review in reviews" :contenido="review">
      <div class="col-xs-12">
        <img :src=review.urlImagen alt="" class="col-xs-12 col-md-3">
        <div class="info  text-center col-md-9 col-xs-12">
          <h2 class="col-xs-10">{{review.titulo}}</h2>
          <a href="#" class=col-xs-1><span class="glyphicon glyphicon-pencil"></span></a>
          <a href="#" class=col-xs-1><span class="glyphicon glyphicon-remove"></span></a>
          <p class="col-xs-12 text-center">100</p>
        </div>
      </div>
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
      traerNoticias : function(){
          this.$http.get("../api/reviews").then(function (response){
            this.reviews = response.data;
               console.log(response.data);
               
          });
      }
    },
    //funcion que se ejecuta al cargar la pagina
      mounted(){

        this.traerNoticias();
      }
  }
</script>


<style lang="css">
</style>
