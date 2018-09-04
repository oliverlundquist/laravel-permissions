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

Route::group(['middleware' => ['can:read-posts']], function () {
    Route::get('/list-of-articles', function () {
        return 'I can view this, woohoo! 🙌';
    });
});
// top secret
Route::group(['middleware' => ['can:read-classified-documents']], function () {
    Route::get('/area51', function () {
        return 'extraterrestrial stuff 👽';
    });
});

Auth::routes();
