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
//VISTAS USUARIO
Route::get('index',[\App\Http\Controllers\Controlador::class,'index'])->name('index');

Route::get('actividades',[\App\Http\Controllers\Controlador::class,'actividades'])->name('actividades');

Route::get('gastronomia',[\App\Http\Controllers\Controlador::class,'gastronomia'])->name('gastronomia');

Route::get('lugaresInteres',[\App\Http\Controllers\Controlador::class,'lugaresInteres'])->name('lugaresInteres');

Route::get('ocio',[\App\Http\Controllers\Controlador::class,'ocio'])->name('ocio');

Route::get('contacto',[\App\Http\Controllers\Controlador::class,'contacto'])->name('contacto');

//MOSTRAR ELEMENTO
Route::get('cookies',[\App\Http\Controllers\Controlador::class,'cookies'])->name('cookies');

//MOSTRAR ELEMENTO
Route::get('mostrarActividad/{id}',[\App\Http\Controllers\Controlador::class,'mostrarActividad'])->name('mostrarActividad');

Route::get('mostrarLugarInteres/{id}',[\App\Http\Controllers\Controlador::class,'mostrarLugarInteres'])->name('mostrarLugarInteres');

Route::get('mostrarOcio/{id}',[\App\Http\Controllers\Controlador::class,'mostrarOcio'])->name('mostrarOcio');

Route::get('mostrarVistaGastronomia/{id}',[\App\Http\Controllers\Controlador::class,'mostrarVistaGastronomia'])->name('mostrarVistaGastronomia');


//VISTAS ADMINISTRADOR
Route::get('adminActividades',[\App\Http\Controllers\Controlador::class,'adminActividades'])->name('adminActividades');

Route::get('adminGastronomia',[\App\Http\Controllers\Controlador::class,'adminGastronomia'])->name('adminGastronomia');

Route::get('adminLugaresInteres',[\App\Http\Controllers\Controlador::class,'adminLugaresInteres'])->name('adminLugaresInteres');

Route::get('adminOcio',[\App\Http\Controllers\Controlador::class,'adminOcio'])->name('adminOcio');

//VISTAS FORMULARIO
Route::get('formulario',[\App\Http\Controllers\Controlador::class,'formulario'])->name('formulario');

Route::get('formActividades',[\App\Http\Controllers\Controlador::class,'formActividades'])->name('formActividades');

Route::get('formGastronomia',[\App\Http\Controllers\Controlador::class,'formGastronomia'])->name('formGastronomia');

Route::get('formLugaresinteres',[\App\Http\Controllers\Controlador::class,'formLugaresinteres'])->name('formLugaresinteres');

Route::get('formOcio',[\App\Http\Controllers\Controlador::class,'formOcio'])->name('formOcio');

//FUNCIONES GUARDAR INFORMACION DE LOS FORMULARIOS
Route::post('guardarActividades',[\App\Http\Controllers\Controlador::class,'guardarActividades'])->name('guardarActividades');

Route::post('guardarGastronomia',[\App\Http\Controllers\Controlador::class,'guardarGastronomia'])->name('guardarGastronomia');

Route::post('guardarLugaresInteres',[\App\Http\Controllers\Controlador::class,'guardarLugaresInteres'])->name('guardarLugaresInteres');

Route::post('guardarOcio',[\App\Http\Controllers\Controlador::class,'guardarOcio'])->name('guardarOcio');

//FUNCIONES ELIMINAR
Route::delete('destroyActividad/{id}',[\App\Http\Controllers\Controlador::class,'destroyActividad'])->name('destroyActividad');

Route::delete('destroyGastronomia/{id}',[\App\Http\Controllers\Controlador::class,'destroyGastronomia'])->name('destroyGastronomia');

Route::delete('destroyLugaresInteres/{id}',[\App\Http\Controllers\Controlador::class,'destroyLugaresInteres'])->name('destroyLugaresInteres');

Route::delete('destroyOcio/{id}',[\App\Http\Controllers\Controlador::class,'destroyOcio'])->name('destroyOcio');

//VISTAS EDITAR
Route::get('editActividad/{id}',[\App\Http\Controllers\Controlador::class,'editActividad'])->name('editActividad');

Route::get('editGastronomia/{id}',[\App\Http\Controllers\Controlador::class,'editGastronomia'])->name('editGastronomia');

Route::get('editLugaresInteres/{id}',[\App\Http\Controllers\Controlador::class,'editLugaresInteres'])->name('editLugaresInteres');

Route::get('editOcio/{id}',[\App\Http\Controllers\Controlador::class,'editOcio'])->name('editOcio');

//FUNCIONES GUARDAR EDIT
Route::put('updateActividades/{id}',[\App\Http\Controllers\Controlador::class,'updateActividades'])->name('updateActividades');

Route::put('updateGastronomia/{id}',[\App\Http\Controllers\Controlador::class,'updateGastronomia'])->name('updateGastronomia');

Route::put('updateLugaresInteres/{id}',[\App\Http\Controllers\Controlador::class,'updateLugaresInteres'])->name('updateLugaresInteres');

Route::put('updateOcio/{id}',[\App\Http\Controllers\Controlador::class,'updateOcio'])->name('updateOcio');