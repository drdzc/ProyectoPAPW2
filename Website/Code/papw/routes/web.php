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

//Principal
Route::get("/carruselRelevantes", 'aplicacionController@carruselRelevantes');
Route::post("/buscar",'aplicacionController@buscarTexto');
Route::post("/buscarFiltros",'aplicacionController@buscarFiltros');
//Principal

Route::get('/juego/{titulo}','juegoController@verJuego');
Route::get('/TJuegos','juegoController@verJuegos');

/*NOTICIA*/
Route::get('noticia/{titulo}/{id}',['uses' => 'noticiaController@verNoticia' ]);
Route::get('/noticias/crear','noticiaController@crearNoticia');
Route::post('/noticia/guardar','noticiaController@guardar');
Route::get('noticias','noticiaController@noticias');
Route::get('/listaNoticias','noticiaController@traerNoticias');
Route::post('/comentarNoticia','noticiaController@comentar');
Route::get('/noticiaOtros', 'noticiaController@Otros');
Route::get('/todasNoticias', 'noticiaController@todasNoticiasPaginadas');
Route::delete('/eliminarNoticia','noticiaController@eliminarNoticia');
Route::get('/verNoticia/{titulo}/{id}', 'noticiaController@editarNoticiaVer');
Route::put('/editarNoticia','noticiaController@editarNoticia');
/*NOTICIA*/

//REV
Route::get('review/{titulo}/{id}','reviewController@verReview');
Route::get('/review/crear','reviewController@crearReview');
Route::get('/review/crear/nueva/{id}', 'reviewController@crearconID');
Route::post('/review/guardar','reviewController@guardar');
Route::get('reviews','reviewController@reviews');
Route::get('/listaReviews','reviewController@traerReviews');
Route::get('/todasReviews', 'reviewController@todasReviewsPaginadas');
Route::post('/comentarReview', 'reviewController@comentarReview');
Route::delete('/eliminarReview', 'reviewController@eliminarReview');
Route::get('/verReview/{titulo}/{id}', 'reviewController@verReviewEditar');
Route::put('/editarReview', 'reviewController@editarReview');
//REV


Route::get('/perfil','aplicacionController@verPerfil');
Route::get('/principal', 'aplicacionController@paginaPrincipal')->name('Principal');
