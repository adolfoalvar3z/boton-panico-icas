<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Visor;
use App\Models\Reporte;

class MostrarVisor extends Component
{
    public function asistir(Reporte $reporte)
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $nombre_maquina_asiste = Visor::select('name')->where('ip', $ip)->first();
        $reporte->ip_asiste = $ip;
        $reporte->nombre_maquina_asiste = $nombre_maquina_asiste->name;
        $reporte->status = 'asistencia';
        $reporte->save();
    }

    public function finalizar(Reporte $reporte)
    {
        $reporte->status = 'finalizado';
        $reporte->save();
        return redirect()->route('reporte.visor', [$reporte->id]);
    }

    public function render()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $visor = Visor::where('ip', $ip)->first();
        $reportes = Reporte::where('status', 'alerta')->orWhere('status','asistencia')->orderByDesc('id')->get();
        return view('livewire.mostrar-visor', compact('visor', 'ip', 'reportes'));
    }
}
