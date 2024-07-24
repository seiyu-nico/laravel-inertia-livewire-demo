<?php

use App\Livewire\Counter;
use App\Livewire\Form;
use App\Livewire\Page;
use Illuminate\Support\Facades\Route;

Route::get('/counter', Counter::class);
Route::get('/form', Form::class);
Route::get('/page/{text}', Page::class)->name('page');
