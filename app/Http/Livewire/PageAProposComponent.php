<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PageAProposComponent extends Component
{
    public function render()
    {
        return view('livewire.page-a-propos-component')
            ->layout('layouts.master')
            ->layoutData(['title'=> 'struc-org','heroBgColor'=> 'bg-primary']);
    }
}
