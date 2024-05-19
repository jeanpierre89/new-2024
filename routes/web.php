<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

Route::get('/abaut-me', function () {
    return view('pages.abaut-me');
})->name('abaut-me');

Route::get('/blog-internal', function () {
    return view('pages.blog-internal');
})->name('blog-internal.');