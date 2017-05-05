<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use App\usuario;
use App\review;
use App\juego;
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

    public function traerResenas(){
      $datos = review::with('usuarios')->orderBy('idResena','desc')->paginate(6);
      //$datos = $datos->data->usuarios;
               return response()->json($datos);
    }
    public function traerJuegos(){
      $datos = juego::orderBy('idJuego','desc')->paginate(4);
      return response()->json($datos);
    }

    public function carruselRelevantes(){
      $resenas = DB::table('usuario_resena_juego')->join('usuario','usuario_resena_juego.idUsuario','=','usuario.idUsuario')->select('usuario.nombre','usuario_resena_juego.titulo');
      $datos = DB::table('noticia')->join('usuario','noticia.idUsuario','=','usuario.idUsuario')->union($resenas)->select('usuario.nombre','noticia.titulo')->get();
      return response()->json($datos);

    }

}
