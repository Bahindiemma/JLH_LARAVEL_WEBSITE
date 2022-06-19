<?php

use App\Http\Controllers\{
    SettingsController,
    DashboardController,
    GalleryController
};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::view(uri: '/contact', view: 'contact');

Route::view(uri: '/about', view: 'about');

Route::view(uri: '/blog', view: 'blog');

Route::view(uri: '/contact', view: 'contact');

Route::view(uri: '/gallery', view: 'gallery');

Route::view(uri: '/services', view: 'services');

Route::resource('admin/settings', SettingsController::class);

Route::resource('admin/dashboard', DashboardController::class);

Route::resource('admin/gallery', GalleryController::class);
