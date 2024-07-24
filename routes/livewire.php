<?php

use App\Livewire\Counter;
use App\Livewire\Form;
use Illuminate\Support\Facades\Route;

Route::get('/counter', Counter::class);
Route::get('/form', Form::class);
