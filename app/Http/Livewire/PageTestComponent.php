<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PageTestComponent extends Component
{
    public $title_page='par defaut';
    public $title_link='000';
    public function titlePage1()
    {
        $this->title_page='Hello page 1 Test';
    }
    public function titlePage2()
    {
        $this->title_page='Hello page 2 Test';
    }
    public function render()
    {
        return view('livewire.page-test-component')
            ->layout('layouts.page-test-base');
    }
}
