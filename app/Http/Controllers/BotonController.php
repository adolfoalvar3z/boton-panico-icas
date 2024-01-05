<?php

namespace App\Http\Controllers;

use App\Models\Boton;
use App\Models\Reporte;
use Illuminate\Http\Request;

class BotonController extends Controller
{
    public function index()
    {
        $botones = Boton::all();
        return view('botones.index', compact('botones'));
    }

    public function show($boton)
    {
        $boton = Boton::find($boton);
        return view('botones.show', compact('boton'));
    }

    public function new()
    {
        return view('botones.new');
    }
    public function boton()
    {
        return view('botones.boton');
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
