<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
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

    public function traerNoticias(){
      $datos = DB::table('usuario')->join('noticia', 'noticia.idUsuario', '=', 'usuario.idUsuario')->orderBy('noticia.created_at','desc')
      ->select('usuario.nombre', 'usuario.idUsuario', 'noticia.idNoticia', 'noticia.titulo', 'noticia.subtitulo',
               'noticia.urlBanner', 'noticia.created_at')->paginate(6);
               foreach ($datos as $dato) {
                  $dato->idNoticia = Crypt::encrypt($dato->idNoticia);
               }

               return response()->json($datos);
    }

}
