<?php

use App\Livewire\Frontend\Pages\AboutPage;
use App\Livewire\Frontend\Pages\HomePage;
use App\Livewire\Frontend\Pages\SearchPage;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', HomePage::class)->name('home');
Route::get('/search', SearchPage::class)->name('search');
Route::get('/about', AboutPage::class)->name('about');