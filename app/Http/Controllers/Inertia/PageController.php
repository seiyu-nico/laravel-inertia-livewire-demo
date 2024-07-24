<?php

namespace App\Http\Controllers\Inertia;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

class PageController extends Controller
{
    public function index(string $text)
    {
        if ($text === 'preserve') {
            \Log::info('sleep 5');
            sleep(5);
        }

        return Inertia::render('Page', [
            'text' => $text,
        ]);
    }
}
