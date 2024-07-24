<div>
    <div>
        <nav>
            <a href="{{ route('livewire.page', 'wire:navigatenなし') }}">wire:navigatenなし</a>
            <a href="{{ route('livewire.page', 'wire:navigatenあり') }}" wire:navigate>wire:navigatenあり</a>
            <a href="{{ route('livewire.page', 'wire:navigate.hover') }}" wire:navigate.hover>wire:navigate.hover</a>
        </nav>
    </div>
    <div>{{ $text }}</div>
</div>
