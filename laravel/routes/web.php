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

Route::get('/character/{pagenum}', 'ApiController@allCharacters');

Route::get('/characters/{character}', 'ApiController@showCharacter');

Route::get('/location/{pagenum}', 'ApiController@allLocations');

Route::get('/locations/{location}', 'ApiController@showLocation');

Route::get('/episode/{pagenum}', 'ApiController@allEpisodes');

Route::get('/episodes/{episode}', 'ApiController@showEpisode');

Route::post('/search', 'ApiController@search')->name('search');