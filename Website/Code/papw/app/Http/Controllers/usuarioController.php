<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\usuario;
use Illuminate\Http\Request;

class usuarioController extends Controller
{
    //
    public function crearUsuario(Request $request){
      $usuario1 = new usuario;
      $usuario1->nombre = $request->nombre;
      $usuario1->correo = $request->email;
      $usuario1->contrasena= Hash::make($request->pass);
      $genero = $request->sexo;
      $usuario1->genero = $genero;
      $fecha = $request->anio.'-'.$request->mes.'-'.$request->dia;
      $usuario1->fechaNacimiento = $fecha;
      $usuario1->tipo = 1;
      $usuario1->save();
      return redirect()->route('Principal');

    }
    public function loguearUsuario(Request $req){
      $userData = array(
        'correo' => $req->email,
        'password' => $req->pass,
      );
      if(Auth::attempt($userData)){
        return redirect()->route('Principal');

      }else{
      return redirect()->route('login')->with('mensaje_error','Usuario o contraseña incorrectos')->withInput();
    }

    }

    public function logout(){
      Auth::logout();
      return redirect()->route("index");
    }

    public function verNoticias(){
      $id=Auth::user();

      $datos = DB::table('noticia')->where('idUsuario','=', '1' )->select("titulo", "urlBanner", "idNoticia", "subtitulo")->get();
      //$datos=JSON.parse($datos);
      //return $datos;
      return response()->json($datos);
    }

    public function verReviews(){
      $id=Auth::user();

      $datos = DB::table('usuario_resena_juego')->where('idUsuario','=', '1' )->select("titulo", "urlImagen", "idResena", "frase")->get();
      //$datos=JSON.parse($datos);
      //return $datos;
      return response()->json($datos);
    }
}
