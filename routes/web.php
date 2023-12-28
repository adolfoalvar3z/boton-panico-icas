<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisorController;
use App\Http\Controllers\BotonController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', 'LoginController::showLoginForm');


Route::controller(BotonController::class)->group(function () {
    Route::get('/boton', 'index');
    Route::get('/boton/avisar', 'avisar');
});

Route::get('/visor', [VisorController::class, 'index']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
