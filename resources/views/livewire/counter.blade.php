<div>
    {{-- The whole world belongs to you. --}}
    <h3>Anda Pengunjung {{ $count }}</h3>
    <button wire:click="increment">+</button>
    <button wire:click="decrement">-</button>
    <button wire:click="resetCount">Reset</button>
</div>
