<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Visor;

class MostrarVisor extends Component
{
    public function render()
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $visor = Visor::where('ip', $ip)->first();
        return view('livewire.mostrar-visor', compact('visor', 'ip'));
    }
}
