<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    
    
    <h1>Count :  {{ $count }}</h1>
    <input type="number" wire:model.blur="number">
    <button wire:click="chnageCount({{ $number }})">CHange COunt</button>
</div>
