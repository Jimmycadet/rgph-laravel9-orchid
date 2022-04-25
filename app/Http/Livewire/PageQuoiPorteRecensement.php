<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\View;
use Livewire\Component;

class PageQuoiPorteRecensement extends Component
{
    public function render()
    {
        if(view::exists('livewire.page-quoi-porte-recensement')==false){

            return view('livewire.page-coming-soon')
                ->layout('layouts.master-coming-soon')
                ->layoutData(['title'=> 'En construction','dateLimite'=>'August 15, 2022 23:59:59']);
        }
        return view('livewire.page-quoi-porte-recensement')
            ->layout('layouts.master')
            ->layoutData(['title'=> 'Sur quoi porte le recensement ?','heroBgColor'=> 'bg-primary']);

    }
}
