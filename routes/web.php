<?php

use Illuminate\Support\Facades\Route;

// Route::view('/', 'home');

Route::get('/','homeController');
Route::get('posts', 'PostController@index');
Route::get('posts/create', 'PostController@create');
Route::post('posts/store', 'PostController@store');
Route::get('posts/{post:slug}', 'PostController@show');

Route::get('posts/{post:slug}/edit', 'PostController@edit');
Route::patch('posts/{post:slug}/update', 'PostController@update');

Route::delete('posts/{post:slug}/delete', 'PostController@destroy');

Route::view('contact', 'contact');
Route::view('about', 'about');
Route::view('login', 'login');
