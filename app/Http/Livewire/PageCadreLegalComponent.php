<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\View;
use Livewire\Component;

class PageCadreLegalComponent extends Component
{
    public function render()
    {
        if(view::exists('livewire.page-cadre-legal-component')==false){

            return view('livewire.page-coming-soon')
                ->layout('layouts.master-coming-soon')
                ->layoutData(['title'=> 'En construction','dateLimite'=>'\'August 1, 2022 23:59:59']);
        }
        return view('livewire.page-cadre-legal-component')
            ->layout('layouts.master')
            ->layoutData(['title'=> 'Cadre Légal','heroBgColor'=> 'bg-primary']);
    }
}
