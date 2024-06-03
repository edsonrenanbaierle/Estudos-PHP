<?php 

use App\Http\Route;

Route::get('/', 'HomeController@index');
Route::post('/user/create', 'UserController@store');
Route::post('/user/login', 'UserController@login');
Route::get('/user/fetch', 'UserController@fetch');
Route::put('/user/update', 'UserController@update');
Route::delete('/user/{id}/delete', 'UserController@remove');
