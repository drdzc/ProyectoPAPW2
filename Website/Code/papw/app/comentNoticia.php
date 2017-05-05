<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comentNoticia extends Model
{
    //
    protected $table='usuario_comenta_noticia';
    protected $primaryKey = 'idComentario';
    public function usuarios(){
      return $this->hasMany('App\usuario','idUsuario','idUsuario');
    }
    public function noticias(){
      return $this->belongsTo('App\juego','idNoticia','idNoticia ');
    }
}
