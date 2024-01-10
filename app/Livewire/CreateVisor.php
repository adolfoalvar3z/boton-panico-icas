<?php

namespace App\Livewire;
use Livewire\Attributes\Validate;

use App\Models\Visor;
use Livewire\Component;

class CreateVisor extends Component
{
    #[Validate('required')]
    public $ip = '';

    #[Validate('required')]
    public $name = '';

    public function save()
    {
        try {
            $this->validate();

            Visor::create(
                $this->only(['ip', 'name'])
            );

            return $this->redirect('/visores');
        } catch (\Exception $e) {
            // Aquí puedes manejar el error como quieras. Por ejemplo, puedes mostrar un mensaje de error al usuario.
            session()->flash('error', 'Error al crear el visor: ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.create-visor');
    }
}
