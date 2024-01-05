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
        $this->validate();

        Visor::create(
            $this->only(['ip', 'name'])
        );

        return $this->redirect('/visores');
    }
    public function render()
    {
        return view('livewire.create-visor');
    }
}
