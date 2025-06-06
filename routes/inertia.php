<?php

use App\Http\Controllers\Inertia\FormController;
use App\Http\Controllers\Inertia\PageController;
use App\Http\Middleware\HandleInertiaRequests;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware([HandleInertiaRequests::class])->group(function () {
    Route::get('/counter', function () {
        return Inertia::render('Counter', [
            'count' => 0,
        ]);
    });

    Route::get('/form', [FormController::class, 'create'])->name('form.create');
    Route::post('/form', [FormController::class, 'store'])->name('form.store');
    Route::get('/page/{text}', [PageController::class, 'index'])->name('page');
});
