<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('notes', 'NoteController@index');
Route::get('notes/{note}', 'NoteController@show');
Route::post('notes', 'NoteController@store');
Route::put('notes/{note}', 'NoteController@update');
Route::delete('notes/{note}', 'NoteController@delete');

Route::post('register', 'Auth\RegisterController@register');