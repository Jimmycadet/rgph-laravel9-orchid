<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\View;
use Livewire\Component;

class PageStrucOrgComponent extends Component
{
    public function render()
    {
        if(view::exists('livewire.page-struc-org-component')==false){

            return view('livewire.page-coming-soon')
                ->layout('layouts.master-coming-soon')
                ->layoutData(['title'=> 'En construction','dateLimite'=>'Jully 1, 2022 23:59:59']);
        }
        return view('livewire.page-struc-org-component')
            ->layout('layouts.master')
            ->layoutData(['title'=> 'Structure Organisationnelle','heroBgColor'=> 'bg-primary']);
    }
}
