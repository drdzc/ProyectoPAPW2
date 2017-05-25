<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    //
    protected $table = 'usuario_resena_juego';
    protected $primaryKey = 'idResena';

    public function usuarios(){
      return $this->hasMany('App\usuario','idUsuario','idUsuario');
    }
    public function admins(){
      return $this->hasMany('App\usuario','idUsuario','idUsuario')->where("tipo","0");
    }
    public function usuariosC(){
      return $this->hasMany('App\usuario','idUsuario','idUsuario')->where("tipo","1");
    }
    public function juegos(){
      return $this->belongsTo('App\juego','idJuego','idJuego');
    }
}
