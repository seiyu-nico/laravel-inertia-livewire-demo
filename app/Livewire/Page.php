<?php

namespace App\Livewire;

use Livewire\Component;

class Page extends Component
{
    public ?string $text = null;

    public function mount(?string $text)
    {
        $this->text = $text;
    }

    public function render()
    {
        if ($this->text === 'wire:navigate.hover') {
            \Log::info('sleep 5');
            sleep(5);
        }

        return view('livewire.page');
    }
}
