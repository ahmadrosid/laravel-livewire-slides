<?php

use App\Livewire\Slides;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::get('/slides', Slides::class)->name('slide');
