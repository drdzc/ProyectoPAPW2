<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\noticia;
use App\comentNoticia;

class noticiaController extends Controller
{
    //
  public $idNoticia;
    public function verNoticia($titulo,$id){
        if(Auth::check()){
          $idNoticia=$id;
          try {
            $id=Crypt::decrypt($id);
          } catch (\Exception $e) {

          }


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

    public function noticias(){
      return view('Noticias.todasNoticias');
    }

    public function traerNoticias(){
      $datos = noticia::paginate(6);
            return response()->json($datos);
    }

    public function comentar(Request $req){
      $texto = $req->input('texto');
      $idNoticia = $req->input("id");
      $comentario = new comentNoticia;
      $comentario->idUsuario = Auth::user()->idUsuario;
      $comentario->idNoticia = $idNoticia;
      $comentario->texto = $texto;
      $comentario->save();
      $datos=['nombre'=>Auth::user()->nombre,'texto'=>$comentario->texto,'urlImagen'=>Auth::user()->urlFoto, 'fecha'=>$comentario->created_at];
      return response()->json($datos);
    }

    public function Otros(Request $req){
      $noticias = noticia::where('idNoticia','!=', $req->input('id'))->orderBy('idNoticia','desc')->paginate(3);
      $comentarios = comentNoticia::with('usuarios')->where('idNoticia','=',$req->input('id'))->orderBy('idComentario','desc')->paginate(10);
      for ($i=0; $i < 3; $i++) {
        # code...
        $id = $noticias[$i]->idNoticia;
        $id=Crypt::encrypt($id);
        //$noticias[$i]->idNoticia=$id;
      }
      $datos=['noticias'=>$noticias,'comentarios'=>$comentarios, 'id'=>Auth::user()->idUsuario];
      return response()->json($datos);
    }

    public function todasNoticiasPaginadas(){
      $noticias = noticia::with('usuarios')->orderBy('idNoticia','desc')->paginate(3);
      return view('Noticias.todasNoticias',['noticias'=>$noticias]);
    }

    public function eliminarNoticia(Request $req){
      $id = $req->input("idNoticia");
      $noticia = noticia::where("idNoticia",$id)->first();
      $noticia->activa=0;
      $noticia->save();
    }

    public function editarNoticiaVer($titulo, $id){
      $id=Crypt::decrypt($id);
      $noticia = noticia::with("usuarios")->where("idNoticia",$id)->first();
      return view("Noticias.editar",["noticia"=>$noticia]);
    }

    public function editarNoticia(Request $req){
      $id = $req->input('id');
      $noticia = noticia::where('idNoticia',$id)->first();
      $noticia->titulo = $req->input('titulo');
      $noticia->subtitulo = $req->input('subtitulo');
      $noticia->contenido = $req->input('texto');
      if(Input::hasFile('banner')){
        $foto=Input::file('banner');
        $nombreArchivo = $foto->getClientOriginalName();
        //$nombreArchivo=pathinfo($foto->getClientOriginalName(), PATHINFO_FILENAME);
        //$nombreArchivo=tempnam(public_path()."/Archivos/Noticias",$nombreArchivo);
        $foto->move(public_path()."/Archivos/Reviews/Banners",$nombreArchivo);
        $noticia->urlBanner = "/Archivos/Reviews/Banners/".$nombreArchivo;
      }

      $noticia->save();
    }
}
