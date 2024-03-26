<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Boton;
use App\Models\Reporte;

class MostrarBoton extends Component
{
    public function mostrarBoton($boton, $ip, $texto, $emoji, $emojiDefault)
    {
        if (optional($boton)->ip == $ip) {
            return "<span class='fw-bolder text-center'>{$texto}</span><span class='fs-2 text-center'>{$emoji}</span>";
        } else {
            return "<p class='fs-1'>{$emojiDefault}</p>";
        }
    }
    public function reportar()
    {

        $ip = $_SERVER['REMOTE_ADDR'];
        $nombre_maquina_reporta = Boton::select('name')->where('ip', $ip)->first();
        if ($nombre_maquina_reporta == null || $nombre_maquina_reporta == '') {
            return redirect()->route('boton');
        }else{
            $reporte = new Reporte;
            $reporte->nombre_maquina_reporta = $nombre_maquina_reporta->name;
            $reporte->ip_reporta = $ip;
            $reporte->status = "alerta";
            $reporte->save();
        }

    }
    public function render()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $boton = Boton::where('ip', $ip)->first();
        $reporte = Reporte::select('id', 'status')->where('ip_reporta', $ip)->latest()->first();
        return view('livewire.mostrar-boton', compact('boton', 'ip', 'reporte'));
    }
}
