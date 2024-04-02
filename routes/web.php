<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Clicker;
use App\Livewire\Currency;
use App\Livewire\Login;

Route::get('/login', Login::class);
Route::get('/manual-create-currency', Currency::class);
Route::get('/manual-create-user', Clicker::class);
