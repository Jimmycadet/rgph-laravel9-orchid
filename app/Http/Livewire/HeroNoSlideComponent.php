<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HeroNoSlideComponent extends Component
{
    public $heroBgColor;
    public function render()
    {
        return view('livewire.hero-no-slide-component');
    }
}
