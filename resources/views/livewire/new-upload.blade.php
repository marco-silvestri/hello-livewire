<div>
    <form wire:submit.prevent="save">
        <input type="file" wire:model="Upload">
    
        @error('Upload') <span class="error">{{ $message }}</span> @enderror
    
        <button type="submit">Save Photo</button>
    </form>
</div>
