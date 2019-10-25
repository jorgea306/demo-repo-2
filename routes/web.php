<?php

use Illuminate\Support\Facades\Route;


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

Route::get('/', 'PagesController@inicio')->name('inicio');

Route::get('/descargas', 'PagesController@descargas')->name('descargas');

Route::get('/noticias', 'PagesController@noticias')->name('noticias');

Route::get('/noticias_gestion', 'PagesController@noticias_gestion')->name('noticias_gestion');

Route::get('/usuarios_gestion', 'PagesController@usuarios_gestion')->name('usuarios_gestion');

Route::get('/noticias/noticias_crear', 'PagesController@noticias_crear')->name('noticias_crear');

Route::post('/noticias/crear', 'PagesController@crear')->name('noticias.crear');

Route::get('noticias/noticias_detalles/{id}', 'PagesController@noticias_detalles')->name('noticias_detalles');

Route::get('/noticias_gestion/noticias_editar/{id}', 'PagesController@noticias_editar')->name('noticias_editar');

Route::put('/noticias_gestion/noticias_editar/{id}', 'PagesController@update')->name('noticias_update');

Route::delete('/noticias_gestion/eliminar/{id}', 'PagesController@eliminar')->name('noticias_eliminar');

Route::delete('/usuarios_gestion/eliminar/{id}', 'PagesController@usuarios_eliminar')->name('usuarios_eliminar');

Route::get('/usuarios_gestion/usuarios_editar/{id}', 'PagesController@usuarios_editar')->name('usuarios_editar');

Route::put('/usuarios_gestion/usuarios_editar/{id}', 'PagesController@usuarios_update')->name('usuarios_update');









Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
