<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisorController extends Controller
{
    //
    public function index()
    {
        $ip = $_SERVER['REMOTE_ADDR'];

        return view('visores.index', ['ip' =>$ip]);
    }
}
