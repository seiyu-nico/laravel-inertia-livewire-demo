<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;

class Form extends Component
{
    #[Validate('required', message: '必須です。')]
    #[Validate('min:5', message: '5文字以上で入力してください。')]
    public $text1 = 'Hello Livewire!';

    #[Validate('required', message: '必須です。')]
    #[Validate('min:5', message: '5文字以上で入力してください。')]
    public $text2 = 'Hello World!';

    // この書き方でもOK
    // public function rules()
    // {
    //     return [];
    // }

    // public function messages()
    // {
    //     return [];
    // }

    // public function validationAttributes()
    // {
    //     return [];
    // }

    public function render()
    {
        return view('livewire.form');
    }

    public function save()
    {
        $this->validate();

        \Log::info('Save method called');
        sleep(5);
    }
}
