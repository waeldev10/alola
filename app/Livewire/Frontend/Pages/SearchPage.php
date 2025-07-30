<?php

namespace App\Livewire\Frontend\Pages;

use Livewire\Component;
use Livewire\WithPagination;

class SearchPage extends Component
{

    use WithPagination;

    public $searchQuery = '';
    public $results = [];

    public function mount()
    {
        $this->searchQuery = request()->get('q', 'مستشفى'); 
        $this->performSearch();
    }


    public function performSearch()
    {
    
        $this->results = [
            ['name' => 'مستشفى سدك', 'status' => 'متاح', 'status_color' => 'green', 'image' => asset('assets/images/h2.webp')],
            ['name' => 'مستشفى سدك', 'status' => 'متاح', 'status_color' => 'green', 'image' =>  asset('assets/images/h2.webp')],
            ['name' => 'مستشفى سدك', 'status' => 'مغلق', 'status_color' => 'red', 'image' => asset('assets/images/h2.webp')],
            ['name' => 'مستشفى سدك', 'status' => 'متاح', 'status_color' => 'green', 'image' => asset('assets/images/h2.webp')],
            ['name' => 'مستشفى سدك', 'status' => 'متاح', 'status_color' => 'green', 'image' => asset('assets/images/h2.webp')],
            ['name' => 'مستشفى سدك', 'status' => 'مغلق', 'status_color' => 'red', 'image' => asset('assets/images/h2.webp')],
            ['name' => 'مستشفى سدك', 'status' => 'متاح', 'status_color' => 'green', 'image' => asset('assets/images/h2.webp')],
            ['name' => 'مستشفى سدك', 'status' => 'متاح', 'status_color' => 'green', 'image' => asset('assets/images/h2.webp')],
            ['name' => 'مستشفى سدك', 'status' => 'متاح', 'status_color' => 'green', 'image' => asset('assets/images/h2.webp')],
            ['name' => 'مستشفى سدك', 'status' => 'مغلق', 'status_color' => 'red', 'image' => asset('assets/images/h2.webp')],
            ['name' => 'مستشفى سدك', 'status' => 'متاح', 'status_color' => 'green', 'image' => asset('assets/images/h2.webp')],
            ['name' => 'مستشفى سدك', 'status' => 'متاح', 'status_color' => 'green', 'image' => asset('assets/images/h2.webp')],
        ];
    }

    public function render()
    {
        return view('livewire.frontend.pages.search-page')
        ->extends('layouts.app')->section('content');
    }
}
