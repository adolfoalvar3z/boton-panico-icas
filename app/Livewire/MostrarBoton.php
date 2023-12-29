<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Boton;

class MostrarBoton extends Component
{
    public function render()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $boton = Boton::where('ip', $ip)->first();
        return view('livewire.mostrar-boton', compact('boton', 'ip'));
    }
}
