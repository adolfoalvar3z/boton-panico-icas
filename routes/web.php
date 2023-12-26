<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsultarController;
use App\Http\Controllers\BotonPanicoController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(BotonPanicoController::class)->group(function(){
    Route::get('/boton-panico', 'index');
    Route::get('/boton-panico/avisar', 'avisar');
});



Route::get('/vigilar', [ConsultarController::class, 'index']);
