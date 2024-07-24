<?php

use App\Http\Middleware\HandleInertiaRequests;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::middleware([HandleInertiaRequests::class])->group(function () {
    Route::get('/counter', function () {
        return Inertia::render('Counter', [
            'count' => 0,
        ]);
    });
});
