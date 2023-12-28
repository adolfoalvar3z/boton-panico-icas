<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisorController;
use App\Http\Controllers\BotonController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(BotonController::class)->group(function () {
    Route::get('/boton', 'index');
    Route::get('/boton/avisar', 'avisar');
});

Route::get('/visor', [VisorController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
