<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\contactUs;
class ContactFormComponent extends Component
{
    public $name;
    public $email;
    public $mobilenumber;
    public $yourMessage;

    public function saveMessage()
    {
        contactUs::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'mobilenumber'=>$this->mobilenumber,
            'yourMessage'=>$this->yourMessage,
        ]);
       
    }

    public function render()
    {
        return view('livewire.contact-form-component');
    }
}
