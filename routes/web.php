<?php

use App\Http\Controllers\LogoutController;
use App\Livewire\About;
use App\Livewire\Homepage;
use App\Livewire\Login;
use App\Livewire\Orders\Create;
use App\Livewire\Orders\Index;
use App\Livewire\Register;
use Illuminate\Support\Facades\Route;

Route::get('/', Homepage::class)->name('homepage')->middleware('guest');
Route::get('/login', Login::class)->name('login')->middleware('guest');
Route::get('/register', Register::class)->name('register')->middleware('guest');

Route::middleware('auth')->group(function () {
    Route::get('/about', About::class)->name('about');

    Route::get('/orders', Index::class)->name('orders');
    // Route::get('/orders/create', Create::class)->name('orders.create');
});

Route::post('logout', LogoutController::class)->name('logout');