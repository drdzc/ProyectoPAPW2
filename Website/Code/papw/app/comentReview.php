<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comentReview extends Model
{
    //
    protected $table='usuario_comenta_resena';
    protected $primaryKey = 'idComentario';
    public function usuarios(){
      return $this->hasMany('App\usuario','idUsuario','idUsuario');
    }
    public function noticias(){
      return $this->belongsTo('App\review','idResena','idResena');
    }
}
