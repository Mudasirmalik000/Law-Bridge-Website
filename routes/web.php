<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\About;
use App\Livewire\RequestForm;

Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/contact', RequestForm::class)->name('contact');



