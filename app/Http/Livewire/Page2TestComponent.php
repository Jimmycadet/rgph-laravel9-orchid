<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Page2TestComponent extends Component
{
    public function render()
    {
        return view('livewire.page2-test-component')
            ->layout('layouts.page-test-base');
    }
}
