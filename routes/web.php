<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisorController;
use App\Http\Controllers\BotonController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');


//cargar controlador de liveware

Route::get('/visor', [VisorController::class, 'index'])->name('visor');
Route::get('/boton', [BotonController::class, 'index'])->name('boton');

//reportar
Route::post('/boton/reportar', [BotonController::class,'reportar'])->name('reportar');

//asistir reporte
Route::put('/visor/{reporte}/asistir', [VisorController::class, 'asistir'])->name('visor.asistir');
Route::put('/visor/{reporte}/finalizado', [VisorController::class, 'finalizado'])->name('visor.finalizado');


//propiedades de botones
Route::get('/listar-botones', [BotonController::class, 'index'])->name('listar-boton');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');
