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

Route::get('post' ,'PostController@index')->name('post.index');

Route::get('about' ,'AboutController@index')->name('about.index');

Route::get('contact' ,'ContactsController@index')->name('contacts.index');

Route::get('main' ,'MainController@index')->name('main.index');
