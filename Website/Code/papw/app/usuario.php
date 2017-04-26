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
}
