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
        return "<span class='fw-bolder text-center'>{$texto}</span><br><span class='fs-2 text-center'>{$emoji}</span>";
    } else {
        return "<p class='fs-1'>{$emojiDefault}</p>";
    }
}
    public function render()
    {

        $ip = $_SERVER['REMOTE_ADDR'];
        $boton = Boton::where('ip', $ip)->first();
        $reporte = Reporte::select('id','status')->where('ip_reporta', $ip)->latest()->first();
        return view('livewire.mostrar-boton', compact('boton', 'ip', 'reporte'));
    }


}
