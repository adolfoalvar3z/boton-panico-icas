<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BotonController extends Controller
{
    //
    public function index()
    {
        $ip = $_SERVER['REMOTE_ADDR'];

        return view("botones.index", ['ip' => $ip]);
    }

    public function avisar()
    {
        return "cocoloco";
    }
}
