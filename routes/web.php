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
    return view('welcome');
});


Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::resource('pacientes', 'PacienteController');
Route::resource('sugerencias', 'SugerenciaController');
Route::resource('controles', 'ControlController');
Route::resource('denuncias', 'DenunciaController');
Route::resource('casos_positivos', 'CasoPositivoController');
Route::resource('usuarios', 'UsuarioController');
Route::get('generos', 'GraficoController@index');
