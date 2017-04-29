<template>
  <div class="">
    <div class="noticia row" v-for="noticia in noticias" :contenido="noticia">
      <div class="col-xs-12">
        <img :src=noticia.urlBanner  alt="" class="col-xs-12 col-md-3">
        <div class="info  text-center col-md-9 col-xs-12">
          <h2 class="col-xs-10">{{noticia.titulo}}</h2>
          <a href="#" class=col-xs-1><span class="glyphicon glyphicon-pencil"></span></a>
          <a href="api/borrar/" class="col-xs-1"><span class="glyphicon glyphicon-remove"></span></a>
          <p class="col-xs-12 text-left">{{noticia.subtitulo}}</p>
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
        noticias : []
      }
    },
    props : ['contenido'],
    //funciones que van a traer los datos
    methods: {
      traerNoticias : function(){
          this.$http.get("../api/noticias").then(function (response){
            this.noticias = response.data;
               console.log(response.data);
               console.log(this.noticias[0].titulo);
          });
      }
    },
    //funcion que se ejecuta al cargar la pagina
      mounted(){

        this.traerNoticias();
      }
  }
</script>
