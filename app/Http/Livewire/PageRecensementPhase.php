<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\View;
use Livewire\Component;

class PageRecensementPhase extends Component
{
    public function render()
    {
        if(view::exists('livewire.page-recensement-phase')==false){

            return view('livewire.page-coming-soon')
                ->layout('layouts.master-coming-soon')
                ->layoutData(['title'=> 'En construction','dateLimite'=>'August 7, 2022 23:59:59']);
        }
        return view('livewire.page-recensement-phase')
            ->layout('layouts.master')
            ->layoutData(['title'=> 'Les phases du recensement','heroBgColor'=> 'bg-primary']);

    }
}
