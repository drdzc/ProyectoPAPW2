<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use App\usuario;
use App\review;
use App\noticia;
use App\juego;
use Illuminate\Http\Request;



class aplicacionController extends Controller
{
    //


    public function paginaPrincipal(Request $req){
    if(Auth::check()){
      $noticiasRelevantes = noticia::with("admins")->orderBy("idNoticia","desc")->limit(3)->get();
      $revRelevantes = review::with("admins")->orderBy("idResena","desc")->limit(3)->get();
      $noticias = noticia::with("usuariosC")->orderBy("idNoticia","desc")->limit(6)->get();
      $reviews = review::with("usuariosC")->orderBy("idResena","desc")->limit(6)->get();
      $lanzamientos = juego::orderBy("fechaLanzamiento","desc")->limit(4)->get();
      return view('Principal',["noticiasR"=>$noticiasRelevantes, "reviewsR"=>$revRelevantes, "noticias" => $noticias, "reviews" => $reviews,
                    "lanzamientos" => $lanzamientos]);
    }

      else {
        return redirect()->route("login")->with('mensaje_error','Debes haber iniciado sesion');
      }

    }
    public function verPerfil(Request $req){
        if(Auth::check())
      {
        $misNoticias = noticia::where("idUsuario",Auth::user()->idUsuario)->where("activa",1)->get();
        $misReviews = review::where("idUsuario", Auth::user()->idUsuario)->where("activa",1)->get();
        return view('usuarios.usuario', ["noticias"=>$misNoticias, "reviews" => $misReviews]);
      }
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

    public function buscarTexto(Request $req){
      $texto = $req->input("textoBuscar");
      $noticias = noticia::with("usuarios")->where('titulo', 'LIKE', '%'.$texto.'%')->paginate(5);
      $reviews = review::with('usuarios')->where('titulo', 'LIKE', '%'.$texto.'%')->paginate(5);
      return view("Busqueda",["noticias"=>$noticias, "reviews"=>$reviews]);
    }


    public function buscarFiltros(Request $req){
      $titulo = $req->input('tituloParam');
      $autor = $req->input('autorParam');
      $fecha1 = $req->input('fecha1Param');
      $fecha2 = $req->input('fecha2Param');
      $busqueda = $req->input('busquedaParam');
      switch($busqueda){
        case 1:
          $noticias = noticia::where("titulo",'LIKE', '%'.$titulo.'%')->get();
          $reviews = review::where("titulo",'LIKE', '%'.$titulo.'%')->get();
          echo $noticias.$reviews;
          break;
        case 2:
          $noticias=DB::table('noticia')->join('usuario', function ($join) {
          $join->on('usuario.idUsuario', '=', 'noticia.idUsuario')
               ->where('usuario.nombre', 'LIKE', '%'.$autor.'%');
             })->where("titulo","like","%".$titulo."%")->get();
             echo $noticias;
          break;
      }

    }
}
