<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

/*
|--------------------------------------------------------------------------
| Web Routes — Personal Portfolio
|--------------------------------------------------------------------------
*/

// Home / Portfolio page
Route::get('/', [PortfolioController::class, 'index'])->name('home');

// Contact form submission
Route::post('/contact', [PortfolioController::class, 'sendContact'])->name('contact.send');

// Resume download
Route::get('/resume', [PortfolioController::class, 'downloadResume'])->name('resume.download');