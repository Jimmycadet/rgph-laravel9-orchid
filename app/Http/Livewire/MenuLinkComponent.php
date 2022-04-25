<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MenuLinkComponent extends Component
{
    public $title_page='par defaut';
    public $title_link;
    public function titlePage($title_page,$title_link)
    {
        $this->title_page=$title_page;
        $this->title_link=$title_link;
    }
    public function render()
    {
        return view('livewire.menu-link-component');
    }
}
