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

Route::get('/', 'Frontend\HomeController@articlesAction');

Route::get('/manager', function () {
    return view('panel.manager');
})->name('manager.home');

Route::get('/manager/categories', 'Panel\CategoryController@listAction')->name('manager.categories.list');
Route::get('/manager/articles', 'Panel\ArticleController@listAction')->name('manager.articles.list');

Route::get('/manager/category/create', 'Panel\CategoryController@createFormAction')->name('manager.category.create.form');
Route::post('/manager/category/create', 'Panel\CategoryController@createAction')->name('manager.category.create.action');

Route::get('/manager/category/edit/{id}', 'Panel\CategoryControllerer@editFormAction')->name('manager.category.edit.form');
Route::post('/manager/category/edit/{id}', 'Panel\CategoryControllerer@editAction')->name('manager.category.edit.action');

Route::get('/manager/article/create', 'Panel\ArticleController@createFormAction')->name('manager.article.create.form');
Route::post('/manager/article/create', 'Panel\ArticleController@createAction')->name('manager.article.create.action');

Route::get('/manager/article/edit/{id}', 'Panel\ArticleController@editFormAction')->name('manager.article.edit.form');
Route::post('/manager/article/edit/{id}', 'Panel\ArticleController@editAction')->name('manager.article.edit.action');


