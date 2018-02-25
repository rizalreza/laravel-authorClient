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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@listIndex')->name('home');

Route::get('/book', 'BookController@indexBook')->name('book.index');
Route::get('/book/create', 'BookController@createBook')->name('book.create');
Route::post('/book/create', 'BookController@storeBook')->name('book.store');
Route::get('/book/{id}/edit', 'BookController@editBook')->name('book.edit');
Route::put('/book/update/{id}', 'BookController@updateBook')->name('book.update');
Route::get('/delete/{id}', 'BookController@deleteBook')->name('deleteBook');


Route::get('/author', 'AuthorController@indexAuthor')->name('author.index');
Route::get('/author/create', 'AuthorController@createAuthor')->name('author.create');
Route::post('/author/create', 'AuthorController@storeAuthor')->name('author.store');
Route::get('/author/{id}/edit', 'AuthorController@editAuthor')->name('author.edit');
Route::put('/author/update/{id}', 'AuthorController@updateAuthor')->name('author.update');
Route::get('/delete/{id}', 'AuthorController@deleteAuthor')->name('delete.Author');
