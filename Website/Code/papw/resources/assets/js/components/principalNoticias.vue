<template lang="html">
  <div class="">
    <div class="col-sm-4 col-xs-12 noticia" v-for="noticia in noticias" :contenido="noticia">
      <img :src=noticia.urlBanner alt="" class="img-responsive">
      <h3 class="">{{noticia.titulo}}</h3>
      <small><span>Por: </span>{{noticia.nombre}}</small>
      <p>{{noticia.subtitulo}}</p>
      <a :href="'noticia/'+noticia.titulo+'/'+noticia.idNoticia">Seguir leyendo</a>
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
          this.$http.get("../api/todoNoticias").then(function (response){
            this.noticias = response.data.data;
               console.log(response.data.data);

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
