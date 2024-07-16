<?php

namespace App\Livewire\Orders;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Create Order')]
class Create extends Component
{
    public function render()
    {
        return view('livewire.orders.create');
    }
}
