<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class juegoController extends Controller
{
    //
    public function verJuego(Request $req){
      return view('Juegos.juego');
    }
}