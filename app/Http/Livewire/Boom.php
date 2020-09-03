<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Boom extends Component
{

    public $name = 'Marco';
    public $strings;

    public function resetName(){
        $this->name = '';
    }

    public function addString(){
        $this->strings[] = $this->name;    
    }

    public function render()
    {   
        return view('livewire.boom');
    }
}
