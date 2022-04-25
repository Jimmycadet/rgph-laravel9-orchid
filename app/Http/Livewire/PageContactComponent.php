<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\View;
use Livewire\Component;

class PageContactComponent extends Component
{
    public function render()
    {
        if(view::exists('livewire.page-contact-component')==false){

            return view('livewire.page-coming-soon')
                ->layout('layouts.master-coming-soon')
                ->layoutData(['title'=> 'En construction','dateLimite'=>'December 20, 2021 23:59:59']);
        }
        return view('livewire.page-contact-component')
            ->layout('layouts.master')
            ->layoutData(['title'=> 'Contact','heroBgColor'=> 'bg-danger']);
    }
}
