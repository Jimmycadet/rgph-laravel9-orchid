<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\View;
use Livewire\Component;

class PageAProposVComponent extends Component
{
    public function render()
    {
        if(view::exists('livewire.page-a-propos-v-component')==false){

            return view('livewire.page-coming-soon')
                ->layout('layouts.master-coming-soon')
                ->layoutData(['title'=> 'En construction','dateLimite'=>'June 1, 2022 23:59:59']);
        }
        return view('livewire.page-a-propos-v-component')
            ->layout('layouts.master')
            ->layoutData(['title'=> 'Justification du Ve RGPH','heroBgColor'=> 'bg-primary']);
    }
}
