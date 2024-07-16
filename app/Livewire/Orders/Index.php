<?php

namespace App\Livewire\Orders;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Order List')]
class Index extends Component
{
    public function render()
    {
        return view('livewire.orders.index');
    }
}
