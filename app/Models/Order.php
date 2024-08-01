<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'opc_numb',
        'prod_numb',
        'prod_name',
        'customer',
        'length_order',
        'req_customer',
        'order_date',
    ];
}
