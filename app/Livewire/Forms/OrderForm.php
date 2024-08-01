<?php

namespace App\Livewire\Forms;

use App\Models\Order;
use Livewire\Attributes\Rule;
use Livewire\Form;

class OrderForm extends Form
{
    #[Rule(['required'])]
    public string $opc_numb = '';

    #[Rule(['required'])]
    public string $prod_numb = '';

    #[Rule(['required'])]
    public string $prod_name = '';

    #[Rule(['required'])]
    public string $customer = '';

    #[Rule(['required'])]
    public string $length_order = '';

    #[Rule(['required'])]
    public string $req_customer = '';

    #[Rule(['required'])]
    public string $order_date = '';

    public function store(): void
    {

        $validated = $this->validate();
        Order::create($validated);

        flash('Order Berhasil Dibuat!', 'success');

        $this->reset();
    }
}
