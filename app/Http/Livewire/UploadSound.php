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

        $getID3 = new \getID3;

        $fileInfo = $getID3->analyze('storage/' . $filename);
        $playtime_seconds = $fileInfo['playtime_seconds'];

        Upload::create([
            'filename' => $filename,
            'playtime' => round($playtime_seconds),
        ]);
    }
}
