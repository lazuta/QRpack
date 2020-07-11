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
})->name('mail.write');

Route::prefix('store')->group(function() {
    Route::post('/', 'MailController@store')->name('mail.create');
});

Route::get('/out/{id}', 'MailController@showOut')->name('out.create');
Route::get('/out/{id}/{user}', 'MailController@showOutMessege')->name('out.add');

Route::get('/by', 'MailController@by')->name('by');

