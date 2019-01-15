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

Route::namespace('Frontend')->name('frontend.')->group(function () {
    Route::get('/', 'HomeController')->name('home');
    Route::get('/category/{category}', 'CategoryController')->name('category');
    Route::get('/article/{category}/{article}', 'ArticleController')->name('article');
});


Route::namespace('Panel')->prefix('manager')->name('manager.')->group(function () {
    Route::get('/', function () {
        return view('panel.manager');
    })->name('home');

    Route::resource('articles', 'ArticleController')->except(['show']);
    Route::resource('categories', 'CategoryController')->except(['show']);
});



