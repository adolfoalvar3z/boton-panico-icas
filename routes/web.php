<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisorController;
use App\Http\Controllers\BotonController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Livewire\Livewire;

Route::get('/', function () {
    return view('auth.login');
})->middleware('guest');

Route::controller(BotonController::class)->group(function () {
    Route::get('/boton', 'index')->name('boton');
    Route::post('/boton/reportar', 'reportar')->name('reportar');
});

Route::get('/visor', [VisorController::class, 'index'])->name('visor');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');
