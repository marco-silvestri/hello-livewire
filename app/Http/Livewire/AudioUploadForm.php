<?php

namespace App\Http\Livewire;

use App\Upload;
use Kdion4891\LaravelLivewireForms\ArrayField;
use Kdion4891\LaravelLivewireForms\Field;
use Kdion4891\LaravelLivewireForms\FormComponent;

class AudioUploadForm extends FormComponent
{
    public function fields()
    {
        return [
            Field::make('Title')->input()->rules('required'),
            Field::make('Description')->input()->rules('required'),
            Field::make('File')->file()->rules('required'),
        ];
    }

    public function success()
    {
        Upload::create($this->form_data);
    }

    public function saveAndStayResponse()
    {
        return redirect()->route('uploads.create');
    }

    public function saveAndGoBackResponse()
    {
        return redirect()->route('uploads.index');
    }
}
