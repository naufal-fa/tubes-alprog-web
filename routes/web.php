<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

// Route::get('/sensor/dht/{temperature}/{humidity}', [App\Http\Controllers\SensorController::class, 'send_sensor']);

Route::group(['as' => ''], function () {
    Route::get('/', App\Livewire\Main\Home\HomeIndex::class)->name('home');
    Route::get('/location-review', App\Livewire\Main\Review\LocationReviewIndex::class)->name('location-review');
    Route::get('/umkm-ekraf', App\Livewire\Main\UMKMEkraf\UMKMEkrafIndex::class)->name('umkm-ekraf');
    Route::get('/research', App\Livewire\Main\Research\ResearchIndex::class)->name('research');
    Route::get('/guide', App\Livewire\Main\Guide\GuideIndex::class)->name('guide');
    // Route::get('/destination', App\Livewire\Main\Destination\DestinationIndex::class)->name('destination');
    // Route::get('/destination-details', App\Livewire\Main\Destination\DestinationDetailIndex::class)->name('destination-details');
    // Route::get('/history', App\Livewire\Main\History\HistoryIndex::class)->name('history');
    // Route::get('/history-details', App\Livewire\Main\History\HistoryDetailIndex::class)->name('history-details');
    // Route::get('/merchandise', App\Livewire\Main\Merchandise\MerchandiseIndex::class)->name('merchandise');
    Route::get('/article', App\Livewire\Main\Article\ArticleIndex::class)->name('article');
    Route::get('/article-detail', App\Livewire\Main\Article\ArticleDetailIndex::class)->name('detail-article');
});

Route::group(['prefix' => 'auth', 'as' => 'auth.'], function () {

    Route::group(['prefix' => 'login', 'as' => 'login.'], function () {
        Route::get('/', App\Livewire\Auth\Login\LoginIndex::class)->name('index');
        Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'login'])->name('post');
    });

    Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
});

Route::group(['middleware' => 'auth', 'prefix' => 'simulindo', 'as' => 'simulindo.'], function () {

    Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.'], function () {
        Route::get('/', App\Livewire\Simulindo\Dashboard\DashboardIndex::class)->name('index');
    });

    Route::group(['prefix' => 'user', 'as' => 'user.'], function () {
        Route::get('/', App\Livewire\Simulindo\User\UserIndex::class)->name('index');
    });

    Route::group(['prefix' => 'content', 'as' => 'content.'], function () {

        Route::group(['prefix' => 'home', 'as' => 'home.'], function () {
            Route::get('/carousel', App\Livewire\Simulindo\Content\Home\CarouselIndex::class)->name('carousel');
            Route::get('/testimonial', App\Livewire\Simulindo\Content\Home\TestimonialIndex::class)->name('testimonial');
        });

        Route::group(['prefix' => 'merchandise', 'as' => 'merchandise.'], function () {
            Route::get('/merchandise', App\Livewire\Simulindo\Content\Merchandise\MerchandiseIndex::class)->name('merchandise');
            Route::get('/category', App\Livewire\Simulindo\Content\Merchandise\CategoryIndex::class)->name('category');
        });
    });
});
