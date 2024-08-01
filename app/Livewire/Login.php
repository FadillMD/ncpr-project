<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Login')]
#[Layout('components.layouts.guest')]
class Login extends Component
{
    #[Rule('required', 'email')]
    public string $email = '';

    #[Rule('required')]
    public string $password = '';

    public function login()
    {
        if (Auth::attempt($this->validate())) {
            return redirect()->route('orders');
        }

        throw ValidationException::withMessages([
            'email' => 'The Provided Credentials do not match our record.',
        ]);
    }

    public function render()
    {
        return view('livewire.login');
    }
}
