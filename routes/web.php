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

Route::get('/populate', 'BookController@populate');

Route::get('/books/id/{id}', 'BookController@byId'); //By iD


Route::get('/books/name/{name}', 'BookController@byName');
Route::get('/books/author/{author}', 'BookController@byAuthor');
Route::get('/books/man/{man}', 'BookController@byMan');
Route::get('/books/year/{year}', 'BookController@byYear');

Route::get('test', function() {
    return view('test');
});
