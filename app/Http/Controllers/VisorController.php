<?php

namespace App\Http\Controllers;

use App\Models\Visor;
use App\Models\Reporte;
use Illuminate\Http\Request;

class VisorController extends Controller
{
    //
    public function index()
    {
       // $ip = $_SERVER['REMOTE_ADDR'];
       return view('visores.index');
    }

    public function asistir(Reporte $reporte)
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $nombre_maquina_asiste = Visor::select('name')->where('ip', $ip)->first();
        $reporte->ip_asiste = $ip;
        $reporte->nombre_maquina_asiste = $nombre_maquina_asiste->name;
        $reporte->status = 'asistencia';
        $reporte->save();
        return redirect()->route('visor');
    }

    public function finalizado(Reporte $reporte)
    {
        $reporte->status = 'finalizado';
        $reporte->save();
        return redirect()->route('visor');
    }
}
