<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Muhamad Fadillah | Homepage')]
#[Layout('components.layouts.main')]
class Homepage extends Component
{
    public function render()
    {
        return view('livewire.homepage');
    }
}
