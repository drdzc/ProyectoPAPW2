<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
class usuario extends Authenticatable
{
    //
    protected $table = 'usuario';
    protected $fillable = [
        'nombre', 'correo',
    ];

    protected $primaryKey = 'idUsuario';

    public function juegosResenados(){
      return $this->belongsToMany('App\juego','usuario_resena_juego','idUsuario', 'idJuego')
      ->withPivot('titulo','contenido1','contenido2','veredicto','frase','urlImagen', 'urlImagen2','calificacion')
      ->withTimestamps();
    }

    
}
