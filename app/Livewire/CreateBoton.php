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
        $this->validate();

        Boton::create(
            $this->only(['ip', 'name'])
        );

        return $this->redirect('/botones');
    }
    public function render()
    {
        return view('livewire.create-boton');
    }
}
