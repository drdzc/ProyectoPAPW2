<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE App\juego;
use App\review;

class juegoController extends Controller
{
    //
    public function verJuego($titulo){
      $infoJuego = juego::where("titulo",$titulo)->get();
      $reviews = review::with("usuarios")->where("idJuego",$infoJuego[0]->idJuego)->limit(4)->get();
      $relacionados = juego::where("titulo","!=", $titulo)->where("plataforma",$infoJuego[0]->plataforma)->limit(3)->get();
      return view('Juegos.juego',["juego"=>$infoJuego, "relacionados"=>$relacionados, "reviews"=>$reviews]);
    }

    public function verJuegos(Request $req){
      $Multiplataforma = juego::where("plataforma","Multiplataforma")->orderBy("fechaLanzamiento", "desc")->get();
      $ps4 = juego::where("plataforma","PS4")->orderBy("fechaLanzamiento", "desc")->get();
      $xbone = juego::where("plataforma","Xbox One")->orderBy("fechaLanzamiento", "desc")->get();
      $switch = juego::where("plataforma","Switch")->orderBy("fechaLanzamiento", "desc")->get();
      return view('Juegos.juegos', ["multi"=>$Multiplataforma, "ps4"=>$ps4, "xbone"=>$xbone,"switch"=>$switch]);
    }
}
