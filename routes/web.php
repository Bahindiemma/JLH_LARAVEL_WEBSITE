<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::view(uri:'/contact', view:'contact');

Route::view(uri:'/about', view:'about');

Route::view(uri:'/blog', view:'blog');

Route::view(uri:'/contact', view:'contact');

Route::view(uri:'/gallery', view:'gallery');

Route::view(uri:'/services', view:'services');
