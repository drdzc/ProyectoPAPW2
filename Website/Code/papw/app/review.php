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
    public function juegos(){
      return $this->belongsTo('App\juego','idJuego','idJuego');
    }
}
