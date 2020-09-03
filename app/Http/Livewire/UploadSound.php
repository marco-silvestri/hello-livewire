<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Upload;

class UploadSound extends Component
{
    use WithFileUploads;

    public $sound;

    public function save()
    {
        $this->validate([
            'sound' => 'required|mimes:mp3|max:51200'
        ]);

        $filename = $this->sound->store('uploads');

        Upload::create([
            'filename' => $filename,
        ]);
    }
}
