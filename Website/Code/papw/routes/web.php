<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

//USUARIO
Route::get('/registro', function(){
  return view('registro');
})->name('registro');
Route::get('/login', function(){
  return view('login');
})->name('login');
Route::post("/registrar",'usuarioController@crearUsuario');
Route::post("/loguear",'usuarioController@loguearUsuario');
Route::get("/logout",'usuarioController@logout')->name("logout");
//USUARIO

Route::get('/juego','juegoController@verJuego');
Route::get('/juegos','juegoController@verJuegos');

/*NOTICIA*/
Route::get('noticia/{titulo}/{id}',['uses' => 'noticiaController@verNoticia' ]);
Route::get('/noticias/crear','noticiaController@crearNoticia');
Route::post('/noticia/guardar','noticiaController@guardar');
/*NOTICIA*/

//REV
Route::get('/review/{titulo}/{id}','reviewController@verReview');
Route::get('/review/crear','reviewController@crearReview');
Route::post('/review/guardar','reviewController@guardar');
//REV
Route::get('/perfil','aplicacionController@verPerfil');
Route::get('/principal', 'aplicacionController@paginaPrincipal')->name('Principal');
