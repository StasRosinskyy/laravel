<?php

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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/post', function () {
    return view('post');
})->name('post');

Route::get('/about', function () {
    return view('about');
})->name('about');


Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');


