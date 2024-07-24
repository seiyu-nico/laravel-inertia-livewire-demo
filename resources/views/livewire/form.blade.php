<form wire:submit="save">
  <div>
    <input wire:model.live="text1" type="text">
    @error('text1')
      <span class="error">{{ $message }}</span>
    @enderror
    <div>{{ $text1 }}</div>
  </div>
  <hr>
  <div>
    <input wire:model.live.debounce.250ms="text2" type="text">
    @error('text2')
      <span class="error">{{ $message }}</span>
    @enderror
    <div>{{ $text2 }}</div>
  </div>

  <div>
    <button type="submit">Save</button>
  </div>
  <div wire:loading wire:target.except="save">
    loading...
  </div>
  <div wire:loading wire:target="save">
    Saveing...
  </div>
</form>
