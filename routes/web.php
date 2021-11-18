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

Route::get('/', function () {
    return redirect('/clinica/listar');
});
Route::get('/clinica', 'App\Http\Controllers\TestController@crearClinica')->name('clinica.agregar');
Route::post('/clinica', 'App\Http\Controllers\TestController@registrarClinica')->name('clinica.guardar');
Route::get('/clinica/listar', 'App\Http\Controllers\TestController@listarClinica')->name('clinica.listar');
Route::get('/clinica/editar/{clinica}', 'App\Http\Controllers\TestController@formularioEditarClinica')->name('clinica.editar');
Route::patch('/clinica/editar/{clinica}', 'App\Http\Controllers\TestController@ActualizarClinica')->name('clinica.actualizar');
Route::get('/clinica/{clinica}', 'App\Http\Controllers\TestController@VerClinica')->name('clinica.ver');
Route::delete('/clinica/{clinica}', 'App\Http\Controllers\TestController@EliminarClinica')->name('clinica.eliminar');
