<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\review;

class reviewController extends Controller
{
    //
    public function verReview($titulo, $id){
      if(Auth::check()){
        $id=Crypt::decrypt($id);
        $datos = DB::table('usuario_resena_juego')->join('usuario', function($join) use($id){
          $join->on('usuario.idUsuario', '=', 'usuario_resena_juego.idUsuario')->where('usuario_resena_juego.idResena', '=', $id);
        } )->select('usuario.nombre', 'usuario.idUsuario', 'usuario_resena_juego.idResena', 'usuario_resena_juego.titulo', 'usuario_resena_juego.contenido1',
         'usuario_resena_juego.contenido2', 'usuario_resena_juego.urlImagen', 'usuario_resena_juego.urlImagen2',
                  'usuario_resena_juego.created_at')->get();
                 return view('Reviews.reviewPrueba',compact('datos'));
      }

      else {
        return redirect()->route("login")->with('mensaje_error','Debes haber iniciado sesion');
      }

    }
    public function crearReview(){
      return view('Reviews.nuevaReview');
    }

    public function guardar(Request $req){
      $rev=new review();
      $rev->idUsuario=Auth::user()->idUsuario;
      $rev->idJuego=1;
      $rev->titulo=$req->titulo;
      $rev->contenido1=$req->contenido1;
      $rev->contenido2=$req->contenido2;
      $rev->veredicto=$req->veredicto;
      $rev->frase="shales";
      $rev->calificacion=$req->calificacion;
    /*  if(Input::hasFile('portada')){
        $foto=Input::file('portada')
        $nombreArchivo = $foto->getClientOriginalName();
        //$nombreArchivo=pathinfo($foto->getClientOriginalName(), PATHINFO_FILENAME);
        //$nombreArchivo=tempnam(public_path()."/Archivos/Noticias",$nombreArchivo);
        $foto->move(public_path()."/Archivos/Reviews/Banners",$nombreArchivo);
        $rev->urlBanner = "/Archivos/Reviews/Banners/".$nombreArchivo;
      }*/

      if(Input::hasFile('imagen1')){
        $foto=Input::file('imagen1');
        $nombreArchivo = $foto->getClientOriginalName();
        //$nombreArchivo=pathinfo($foto->getClientOriginalName(), PATHINFO_FILENAME);
        //$nombreArchivo=tempnam(public_path()."/Archivos/Noticias",$nombreArchivo);
        $foto->move(public_path()."/Archivos/Reviews/Imagenes",$nombreArchivo);
        $rev->urlImagen = "/Archivos/Reviews/Imagenes/".$nombreArchivo;
      }
      if(Input::hasFile('imagen2')){
        $foto=Input::file('imagen2');
        $nombreArchivo = $foto->getClientOriginalName();
        //$nombreArchivo=pathinfo($foto->getClientOriginalName(), PATHINFO_FILENAME);
        //$nombreArchivo=tempnam(public_path()."/Archivos/Noticias",$nombreArchivo);
        $foto->move(public_path()."/Archivos/Reviews/Imagenes",$nombreArchivo);
        $rev->urlImagen2 = "/Archivos/Reviews/Imagenes/".$nombreArchivo;
      }
      $rev->save();
      $id=$rev->idResena;
      $titulo=$rev->titulo;
      $id = Crypt::encrypt($id);
      return redirect("/review/".$titulo."/".$id);
    }
}
