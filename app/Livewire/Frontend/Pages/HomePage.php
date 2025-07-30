<?php

namespace App\Livewire\Frontend\Pages;

use Livewire\Component;

class HomePage extends Component
{
    public function render()
    {
        return view('livewire.frontend.pages.home-page')
        ->extends('layouts.app')->section('content');
    }
}
