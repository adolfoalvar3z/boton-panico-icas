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

Route::get('/visor', [VisorController::class, 'visor'])->name('visor');
Route::get('/boton', [BotonController::class, 'boton'])->name('boton');

//reportar
Route::post('/boton/reportar', [BotonController::class, 'reportar'])->name('reportar');

//asistir reporte
Route::put('/visor/{reporte}/asistir', [VisorController::class, 'asistir'])->name('visor.asistir');
Route::put('/visor/{reporte}/finalizado', [VisorController::class, 'finalizado'])->name('visor.finalizado');

//propiedades de botones
Route::get('/botones', [BotonController::class, 'index'])->name('botones.index');
//Route::get('/botones/{boton}', [BotonController::class, 'show'])->name('botones.show');
Route::get('/botones/new', [BotonController::class, 'new'])->name('botones.new');
//Route::get('/botones/create', [BotonController::class, 'create'])->name('botones.create');
//Route::get('/botones/{boton}/edit', [BotonController::class, 'edit'])->name('botones.edit');
//Route::get('/botones/{boton}/update', [BotonController::class, 'update'])->name('botones.update');
//Route::get('/botones/{boton}/delete', [BotonController::class, 'delete'])->name('botones.delete');


//propiedades visores
Route::get('/visores', [VisorController::class, 'index'])->name('visores.index');
//Route::get('/visores/{boton}', [VisorController::class, 'show'])->name('visores.show');
Route::get('/visores/new', [VisorController::class, 'new'])->name('visores.new');
//Route::get('/visores/create', [VisorController::class, 'create'])->name('visores.create');
//Route::get('/visores/{boton}/edit', [VisorController::class, 'edit'])->name('visores.edit');
//Route::get('/visores/{boton}/update', [VisorController::class, 'update'])->name('visores.update');
//Route::get('/visores/{boton}/delete', [VisorController::class, 'delete'])->name('visores.delete');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');
