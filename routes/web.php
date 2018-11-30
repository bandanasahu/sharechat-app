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

//Route::get('/','Controller@redirectToProvider');



Route::get('auth/instagram', 'Controller@redirectToProvider');
Route::get('auth/instagram/callback', 'Controller@handleProviderCallback');
Route::get('auth/Instagram/callback', 'Controller@instagradata');

