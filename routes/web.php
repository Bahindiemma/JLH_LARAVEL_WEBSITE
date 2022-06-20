<?php

use App\Http\Controllers\{
    SettingsController,
    DashboardController,
    GalleryController,
    ServicesController,
    AboutController,
    BlogController
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

Route::resource('/admin/settings', SettingsController::class);

Route::resource('/admin', DashboardController::class);

Route::resource('/admin/gallery', GalleryController::class);

Route::resource('/admin/services', ServicesController::class);

Route::resource('/admin/blog', BlogController::class);

Route::get('/admin/about', [AboutController::class, 'index']);


