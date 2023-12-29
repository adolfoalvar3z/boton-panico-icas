<?php

namespace App\Http\Controllers;

use App\Models\Boton;
use Illuminate\Http\Request;

class BotonController extends Controller
{
    //
    public function index()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $boton = Boton::where('ip', $ip)->first();
        return view("botones.index", compact('boton', 'ip'));
    }

    public function avisar()
    {
        return "cocoloco";
    }
}
