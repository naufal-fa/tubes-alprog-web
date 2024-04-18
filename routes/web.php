<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::group(['as' => ''], function () {
    Route::get('/', App\Livewire\Main\Home\HomeIndex::class)->name('home');
    Route::get('/guide', App\Livewire\Main\Guide\GuideIndex::class)->name('guide');
    Route::get('/destination', App\Livewire\Main\Destination\DestinationIndex::class)->name('destination');
    Route::get('/destination-details', App\Livewire\Main\Destination\DestinationDetailIndex::class)->name('destination-details');
    Route::get('/event-festival', App\Livewire\Main\Event\EventFestivalIndex::class)->name('event-festival');
    Route::get('/event-festival-details', App\Livewire\Main\Event\EventFestivalDetailIndex::class)->name('event-festival-details');
    Route::get('/culinary-merchandise', App\Livewire\Main\CulinaryMerchandise\CulinaryMerchandiseIndex::class)->name('culinary-merchandise');
    Route::get('/article', App\Livewire\Main\Article\ArticleIndex::class)->name('article');
    Route::get('/article-details', App\Livewire\Main\Article\ArticleDetailIndex::class)->name('article-details');
});
// 'middleware' => 'auth', 
Route::group(['prefix' => 'simulindo', 'as' => 'simulindo.'], function () {
    
    Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
        Route::get('/', App\Livewire\Simulindo\Dashbpard\DashboardIndex::class)->name('dashboard');
    });
});