<?php

use App\Livewire\About;
use App\Livewire\Orders\Create;
use App\Livewire\Orders\Index;
use Illuminate\Support\Facades\Route;

Route::get('/about', About::class)->name('about');

Route::get('/orders', Index::class)->name('orders');
Route::get('/orders/create', Create::class)->name('orders.create');

