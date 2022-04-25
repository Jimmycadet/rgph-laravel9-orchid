<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\View;
use Livewire\Component;

class PageStatEconomiqueDemograpgique extends Component
{
    public function render()
    {
        if(view::exists('livewire.page-stat-economique-demograpgique')==false){

            return view('livewire.page-coming-soon')
                ->layout('layouts.master-coming-soon')
                ->layoutData(['title'=> 'En construction','dateLimite'=>'July 7, 2022 23:59:59']);
        }
        return view('livewire.page-stat-economique-demograpgique')
            ->layout('layouts.master')
            ->layoutData(['title'=> 'Statistiques économiques et démographiques','heroBgColor'=> 'bg-primary']);

    }
}
