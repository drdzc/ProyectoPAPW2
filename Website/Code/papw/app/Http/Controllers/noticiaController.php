<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\noticia;

class noticiaController extends Controller
{
    //
    public function verNoticia($titulo,$id){
        if(Auth::check()){
          $id=Crypt::decrypt($id);
          $datos = DB::table('usuario')->join('noticia', function($join) use($id){
            $join->on('usuario.idUsuario', '=', 'noticia.idUsuario')->where('noticia.idNoticia', '=', $id);
          } )->select('usuario.nombre', 'usuario.idUsuario', 'noticia.idNoticia', 'noticia.titulo', 'noticia.subtitulo', 'noticia.contenido', 'noticia.validada', 'noticia.activa',
                   'noticia.urlBanner', 'noticia.created_at')->get();
                         return view('Noticias.noticia',compact('datos'));
                      //return($datos);
        }

      else {
        return redirect()->route("login")->with('mensaje_error','Debes haber iniciado sesion');
      }
    }
    public function crearNoticia(){
      return view('Noticias.nuevaNoticia');
    }
    public function guardar(Request $req){
      $noticia = new noticia();
      $noticia->titulo = $req->titulo;
      $noticia->subtitulo = $req->subtitulo;
      $noticia->contenido=$req->contenido;
      $noticia->validada = 0;
      $noticia->activa = 1;
      $noticia->idUsuario = Auth::user()->idUsuario;
      $foto=Input::file('imagen');
      if(Input::hasFile('imagen')){
        $nombreArchivo = $foto->getClientOriginalName();
        //$nombreArchivo=pathinfo($foto->getClientOriginalName(), PATHINFO_FILENAME);
        //$nombreArchivo=tempnam(public_path()."/Archivos/Noticias",$nombreArchivo);
        $foto->move(public_path()."/Archivos/Noticias",$nombreArchivo);
        $noticia->urlBanner = "/Archivos/Noticias/".$nombreArchivo;
        $noticia->save();
        $id=$noticia->idNoticia;
        $titulo=$noticia->titulo;
        $id = Crypt::encrypt($id);
        return redirect("noticia/".$titulo."/".$id);
      }
      else{
        return($noticia->idUsuario);
      }
    }
}
