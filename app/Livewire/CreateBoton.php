<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;

use App\Models\Boton;
use Livewire\Component;

class CreateBoton extends Component
{

    #[Validate('required')]
    public $ip = '';

    #[Validate('required')]
    public $name = '';

    public function save()
    {
        try {

            $this->validate();

            Boton::create(
                $this->only(['ip', 'name'])
            );

            return $this->redirect('/botones');
        } catch (\Exception $e) {
            // Aquí puedes manejar el error como quieras. Por ejemplo, puedes mostrar un mensaje de error al usuario.
            session()->flash('error', 'Error al crear el botón: ' . $e->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.create-boton');
    }
}
