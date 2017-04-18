<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aplicacionController extends Controller
{
    //
    public function verNoticia(Request $req){
      return view('Noticias.noticia');
    }
    public function verReview(Request $req){
      return view('Reviews.review');
    }
}
