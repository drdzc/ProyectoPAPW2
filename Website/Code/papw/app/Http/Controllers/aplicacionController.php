<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\usuario;
use Illuminate\Http\Request;



class aplicacionController extends Controller
{
    //

  
    public function paginaPrincipal(Request $req){
    if(Auth::check())
      return view('Principal');
      else {
        return redirect()->route("login")->with('mensaje_error','Debes haber iniciado sesion');
      }

    }
    public function verPerfil(Request $req){
        if(Auth::check())
      return view('usuarios.usuario');
      else {
        return redirect()->route("login")->with('mensaje_error','Debes haber iniciado sesion');
      }

    }

}
