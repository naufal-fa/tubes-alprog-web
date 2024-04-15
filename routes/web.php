<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/destination', function () {
    return view('destination');
})->name('destination');

Route::get('/guide', function () {
    return view('guide');
})->name('guide');

Route::get('/destination-details', function () {
    return view('destination-details');
})->name('destination-details');

Route::get('/event-festival', function () {
    return view('event-festival');
})->name('event-festival');

Route::get('/event-festival-details', function () {
    return view('event-festival-details');
})->name('event-festival-details');

Route::get('/culinary-merchandise', function () {
    return view('culinary-merchandise');
})->name('culinary-merchandise');

Route::get('/article', function () {
    return view('article');
})->name('article');

Route::get('/article-details', function () {
    return view('article-details');
})->name('article-details');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
