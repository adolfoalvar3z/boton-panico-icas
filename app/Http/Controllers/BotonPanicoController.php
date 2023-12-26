<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BotonPanicoController extends Controller
{
    //
    public function index(){
        $ip = $_SERVER['REMOTE_ADDR'];

        return view("boton-panico", ['ip'=>$ip]);
    }

    public function avisar(){
        return "cocoloco";
    }
}
