<?php

namespace App\Http\Controllers;
use App\review;
use App\juego;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\comentReview;


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
                  $comentarios = comentReview::with('usuarios')->where('idResena','=',$id)->orderBy('idComentario','desc')->paginate(10);
                 return view('Reviews.reviewPrueba',compact('datos'),['comentarios'=>$comentarios]);
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
      if(Input::hasFile('portada')){
        $foto=Input::file('portada');
        $nombreArchivo = $foto->getClientOriginalName();
        //$nombreArchivo=pathinfo($foto->getClientOriginalName(), PATHINFO_FILENAME);
        //$nombreArchivo=tempnam(public_path()."/Archivos/Noticias",$nombreArchivo);
        $foto->move(public_path()."/Archivos/Reviews/Banners",$nombreArchivo);
        $rev->urlBanner = "/Archivos/Reviews/Banners/".$nombreArchivo;
      }

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
      $rev->validada=0;
      $rev->activa=1;
      $rev->save();
      $id=$rev->idResena;
      $titulo=$rev->titulo;
      $id = Crypt::encrypt($id);
      return redirect("review/".$titulo."/".$id);
    }

    public function traerReviews(){
      $datos = review::paginate(6);
            return response()->json($datos);
    }

    public function reviews(){
      return view('Reviews.todasReviews');
    }

    public function todasReviewsPaginadas(){
      $reviews = review::with('usuarios')->orderBy('idResena','desc')->paginate(3);
      return view('Reviews.todasReviews',['reviews'=>$reviews]);
    }

    public function comentarReview(Request $req){
      $texto = $req->input('texto');
      $idResena = $req->input("id");
      $comentario = new comentReview;
      $comentario->idUsuario = Auth::user()->idUsuario;
      $comentario->idResena = $idResena;
      $comentario->texto = $texto;
      $comentario->save();
      $datos=['nombre'=>Auth::user()->nombre,'texto'=>$comentario->texto,'urlImagen'=>Auth::user()->urlFoto, 'fecha'=>$comentario->created_at];
      return response()->json($datos);
    }

    public function crearconID($id){
      $juegos = juego::all();
        return view("Reviews.nueva", ["juegos"=>$juegos]);
    }

    public function eliminarReview(Request $req){
      $id = $req->input("idResena");
      $review = review::where("idResena", $id)->first();
      $review->activa=0;
      $review->save();
    }

    public function verReviewEditar($titulo,$id){
      $id=Crypt::decrypt($id);
      $review = review::with("usuarios")->where("idResena",$id)->first();
      return view("Reviews.editar",["review"=>$review]);
    }

    public function editarReview(Request $req){
      $id = $req->input("id");
      $review = review::where("idResena",$id)->first();
      $review->titulo = $req->input("titulo");
      $review->contenido1 = $req->input("contenido1");
      $review->contenido2 = $req->input("contenido2");
      $review->veredicto = $req->input("veredicto");
      $review->frase = $req->input("frase");
      $review->calificacion = $req->input("calificacion");
      if(Input::hasFile('banner')){
        $foto=Input::file('banner');
        $nombreArchivo = $foto->getClientOriginalName();
        //$nombreArchivo=pathinfo($foto->getClientOriginalName(), PATHINFO_FILENAME);
        //$nombreArchivo=tempnam(public_path()."/Archivos/Noticias",$nombreArchivo);
        $foto->move(public_path()."/Archivos/Reviews/Banners",$nombreArchivo);
        $review->urlBanner = "/Archivos/Reviews/Banners/".$nombreArchivo;
      }

      if(Input::hasFile('imagen1')){
        $foto=Input::file('imagen1');
        $nombreArchivo = $foto->getClientOriginalName();
        //$nombreArchivo=pathinfo($foto->getClientOriginalName(), PATHINFO_FILENAME);
        //$nombreArchivo=tempnam(public_path()."/Archivos/Noticias",$nombreArchivo);
        $foto->move(public_path()."/Archivos/Reviews/Imagenes",$nombreArchivo);
        $review->urlImagen = "/Archivos/Reviews/Imagenes/".$nombreArchivo;
      }
      if(Input::hasFile('imagen2')){
        $foto=Input::file('imagen2');
        $nombreArchivo = $foto->getClientOriginalName();
        //$nombreArchivo=pathinfo($foto->getClientOriginalName(), PATHINFO_FILENAME);
        //$nombreArchivo=tempnam(public_path()."/Archivos/Noticias",$nombreArchivo);
        $foto->move(public_path()."/Archivos/Reviews/Imagenes",$nombreArchivo);
        $review->urlImagen2 = "/Archivos/Reviews/Imagenes/".$nombreArchivo;
      }
      echo $review->urlBanner;
      $review->save();
    }
}
