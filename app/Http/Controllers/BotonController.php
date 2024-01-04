<?php

namespace App\Http\Controllers;

use App\Models\Boton;
use App\Models\Reporte;
use Illuminate\Http\Request;

class BotonController extends Controller
{
    public function index()
    {
        return view('botones.index');
    }

    public function reportar()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $nombre_maquina_reporta = Boton::select('name')->where('ip', $ip)->first();
        $reporte = new Reporte;
        $reporte->nombre_maquina_reporta = $nombre_maquina_reporta->name;
        $reporte->ip_reporta = $ip;
        $reporte->status = "alerta";
        $reporte->save();
        return redirect()->route('boton');
    }
}
