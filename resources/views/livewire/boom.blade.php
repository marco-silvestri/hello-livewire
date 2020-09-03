<div>
    <input wire:model="name" type="text">
    <button wire:click="resetName"> Reset </button>
    <button wire:click="addString">Add</button>
    <h2>{{ $name }}</h2>
    @if ($strings)
        @foreach ($strings as $item)
            <p>{{ $item }}</p>    
        @endforeach    
    @endif
</div>
