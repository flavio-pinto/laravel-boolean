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

// Routes static pages
Route::get('/', 'StaticPageController@index')->name('static-page.home'); //grazie al metodo name do un nome alle rotte in modo tale da poter creare facilmente link a queste rotte
Route::get('/privacy', 'StaticPageController@privacy')->name('static-page.privacy');
Route::get('/faq', 'StaticPageController@faq')->name('static-page.faq');

//Routes students
Route::get('/students', 'StudentController@index')->name('students.index');
Route::get('/students/show/{{id}}', 'StudentController@show')->name('students.show');