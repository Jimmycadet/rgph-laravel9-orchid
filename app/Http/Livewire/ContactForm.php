<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class ContactForm extends Component
{
    public $name='';
    public $email='';
    public $subject='';
    public $comments='';

    protected $rules=[
        'name'=>'required|min:6',
        'email'=>'required|email',
        'subject'=>'required|min:6',
        'comments'=>'required|min:10',
    ];

    protected $messages=[
        'name.required'=>'Votre nom est obligatoire',
        'name.min'=>'Votre nom doit avoir au moins 6 caractères',
    ];

    public function updated($propertyName){

            $this->validateOnly($propertyName);

    }

    public function saveMessage(){

        $this->validate();

        Message::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'subject'=>$this->subject,
            'comments'=>$this->comments,
        ]);
        $this->name='';
        $this->email='';
        $this->subject='';
        $this->comments='';
        session()->flash('message', 'votre message a été envoyé avec succès.');
        $this->emit('alert_remove');

    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
