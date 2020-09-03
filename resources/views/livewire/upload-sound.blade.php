<div>
    <form wire:submit.prevent="save">
        <input type="file" wire:model="sound">
    
        @error('sound') <span class="error">{{ $message }}</span> @enderror
    
        <button type="submit">Save Photo</button>
    </form>

    @dump(Storage::disk('uploads')->allFiles());
    @dump($sound);
</div>
