<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Visor;
use App\Models\Reporte;

class MostrarVisor extends Component
{
    public function render()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $visor = Visor::where('ip', $ip)->first();
        $reportes = Reporte::where('status', 'alerta')->orWhere('status','asistencia')->orderByDesc('id')->get();
        return view('livewire.mostrar-visor', compact('visor', 'ip', 'reportes'));
    }
}
