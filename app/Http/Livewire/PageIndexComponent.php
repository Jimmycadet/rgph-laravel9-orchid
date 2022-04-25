<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\View;
use Livewire\Component;

class PageIndexComponent extends Component
{
    public function render()
    {
        if(view::exists('livewire.page-index-component')==false){

            return view('livewire.page-coming-soon')
                ->layout('layouts.master-coming-soon')
                ->layoutData(['title'=> 'En construction','dateLimite'=>'December 20, 2021 23:59:59']);
        }
        return view('livewire.page-index-component')
            ->layout('layouts.master')
            ->layoutData(['title'=> 'Accueil','heroBgColor'=> 'bg-primary']);

    }
}
