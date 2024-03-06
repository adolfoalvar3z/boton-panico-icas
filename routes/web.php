<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisorController;
use App\Http\Controllers\BotonController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('auth.login');
})->middleware('guest')->name('inicio');

//cargar controlador de liveware
Route::get('/visor', [VisorController::class, 'visor'])->name('visor');
Route::get('/reporte/{reporte}', [VisorController::class, 'reportar'])->name('reporte.visor');
Route::get('/boton', [BotonController::class, 'boton'])->name('boton');

//propiedades de botones
Route::get('/botones', [BotonController::class, 'index'])->middleware('auth')->name('botones.index');
Route::get('/botones/new', [BotonController::class, 'new'])->middleware('auth')->name('botones.new');
Route::get('/botones/{boton}/edit', [BotonController::class, 'edit'])->middleware('auth')->name('botones.edit');
Route::put('/botones/{boton}', [BotonController::class, 'update'])->middleware('auth')->name('botones.update');
Route::delete('/botones/{boton}/destroy', [BotonController::class, 'destroy'])->middleware('auth')->name('botones.destroy');
Route::put('/botones/{boton}/revive', [BotonController::class, 'revive'])->middleware('auth')->name('botones.revive');

//usuarios
Route::get('/usuarios', [UserController::class, 'index'])->middleware('auth')->name('usuarios.index');
Route::get('/usuarios/new', [UserController::class, 'new'])->middleware('auth')->name('usuarios.new');
Route::get('/usuarios/{usuario}/edit', [UserController::class, 'edit'])->middleware('auth')->name('usuarios.edit');
Route::put('/usuarios/{usuario}', [UserController::class, 'update'])->middleware('auth')->name('usuarios.update');
Route::delete('/usuarios/{usuario}/destroy', [UserController::class, 'destroy'])->middleware('auth')->name('usuarios.destroy');

//propiedades visores
Route::get('/visores', [VisorController::class, 'index'])->middleware('auth')->name('visores.index');
Route::get('/visores/new', [VisorController::class, 'new'])->middleware('auth')->name('visores.new');
Route::get('/visores/{visor}/edit', [VisorController::class, 'edit'])->middleware('auth')->name('visores.edit');
Route::put('/visores/{visor}', [VisorController::class, 'update'])->middleware('auth')->name('visores.update');
Route::delete('/visores/{visor}/destroy', [VisorController::class, 'destroy'])->middleware('auth')->name('visores.destroy');
Route::put('/visores/{boton}/revive', [VisorController::class, 'revive'])->middleware('auth')->name('visores.revive');
// // obeservacion a incidencia de visor


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');
