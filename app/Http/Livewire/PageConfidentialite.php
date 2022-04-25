<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\View;
use Livewire\Component;

class PageConfidentialite extends Component
{
    public function render()
    {
        if(view::exists('livewire.page-confidentialite')==false){

            return view('livewire.page-coming-soon')
                ->layout('layouts.master-coming-soon')
                ->layoutData(['title'=> 'En construction','dateLimite'=>'September 1, 2022 23:59:59']);
        }
        return view('livewire.page-confidentialite')
            ->layout('layouts.master')
            ->layoutData(['title'=> 'Confidentialité','heroBgColor'=> 'bg-primary']);

    }
}
