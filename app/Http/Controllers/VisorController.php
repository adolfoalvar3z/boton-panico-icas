<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visor;

class VisorController extends Controller
{
    //
    public function index()
    {
       // $ip = $_SERVER['REMOTE_ADDR'];
        //$visor = Visor::where('ip', $ip)->first();
        return view('visores.index');
    }
}
