<div>
    <p>Counter: {{ $counter }}</p>
    <p wire:loading>Loading...</p>
    <p>
        <button wire:click="cancel" style="padding: 1rem;" wire:loading.attr="disabled">Cancel</button>
        <button wire:click="submit" style="padding: 1rem;" wire:loading.attr="disabled">Submit</button>
    </p>
</div>
