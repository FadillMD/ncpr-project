<?php

namespace App\Livewire\Orders;

use App\Livewire\Forms\OrderForm;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Create Order')]
class Create extends Component
{
    public OrderForm $form;

    public function save()
    {

        $this->form->store();
        
    }

    public function render()
    {
        return view('livewire.orders.create');
    }
}
