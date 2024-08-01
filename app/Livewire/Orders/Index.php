<?php

namespace App\Livewire\Orders;

use App\Livewire\Forms\OrderForm;
use App\Models\Order;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Order List')]
class Index extends Component
{
    public OrderForm $form;

    public function save()
    {

        $this->form->store();
        
    }
    Use WithPagination;
    public function render()
    {
        $orders = Order::query()->orderBy('opc_numb', 'desc')->paginate(10);
        return view('livewire.orders.index', [
            'orders' => $orders
        ]);
    }
}
