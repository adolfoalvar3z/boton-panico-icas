<?php

namespace App\Livewire;
use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class CreateUser extends Component
{
    #[Validate('required')]
    public $name = '';

    #[Validate('required')]
    public $email = '';

    #[Validate('required')]
    public $password = '';

    public function save()
    {
        $this->validate();

        User::create(
            $this->only(['name', 'email', 'password'])
        );

        return $this->redirect('/usuarios');
    }
    public function render()
    {
        return view('livewire.create-user');
    }
}
