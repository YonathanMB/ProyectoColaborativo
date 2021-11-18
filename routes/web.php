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
Route::get('/clinica', 'App\Http\Controllers\ClinicaController@crearClinica')->name('clinica.agregar');
Route::post('/clinica', 'App\Http\Controllers\ClinicaController@registrarClinica')->name('clinica.guardar');
Route::get('/clinica/listar', 'App\Http\Controllers\ClinicaController@listarClinica')->name('clinica.listar');
Route::get('/clinica/editar/{clinica}', 'App\Http\Controllers\ClinicaController@formularioEditarClinica')->name('clinica.editar');
Route::patch('/clinica/editar/{clinica}', 'App\Http\Controllers\ClinicaController@ActualizarClinica')->name('clinica.actualizar');
Route::get('/clinica/{clinica}', 'App\Http\Controllers\ClinicaController@VerClinica')->name('clinica.ver');
Route::delete('/clinica/{clinica}', 'App\Http\Controllers\ClinicaController@EliminarClinica')->name('clinica.eliminar');
