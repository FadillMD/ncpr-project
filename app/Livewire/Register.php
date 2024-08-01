<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Register')]
#[Layout('components.layouts.guest')]
class Register extends Component
{
    #[Rule('required', 'string', 'max:255')]
    public string $name = '';

    #[Rule('required', 'string', 'email', 'max:255', 'unique:users')]
    public string $email = '';

    #[Rule('required', 'string', 'min:8', 'confirmed')]
    public string $password = '';

    public string $password_confirmation = '';

    public function register()
    {
        $validatedData = $this->validate();

        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        flash('Akun berhasil dibuat, silahkan masuk.', 'success');

        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.register');
    }
}
