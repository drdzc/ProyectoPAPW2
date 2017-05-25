<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class noticia extends Model
{
    //
        protected $table = 'noticia';
        protected $primaryKey = 'idNoticia';

        public function usuarios(){
          return $this->hasMany('App\usuario','idUsuario','idUsuario');
        }
        public function admins(){
          return $this->hasMany('App\usuario','idUsuario','idUsuario')->where("tipo","0");
        }
        public function usuariosC(){
          return $this->hasMany('App\usuario','idUsuario','idUsuario')->where("tipo","=","1");
        }
}
