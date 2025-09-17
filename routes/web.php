<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', fn () => view('welcome'));
Route::get('/portofolio', fn () => view('portofolio'));

// route untuk form contact
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
