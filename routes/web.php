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

Route::get('/', 'PagesController@index')->name('index');
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/portfolio', 'AppointmentController@index')->name('portfolio');
Route::get('/detail-portfolio', 'AppointmentController@detail')->name('detail-portfolio');
Route::get('/booking', 'AppointmentController@booking')->name('booking');
Route::get('/submit-review', 'AppointmentController@submit_review')->name('submit-review');
Route::get('/confirm', 'AppointmentController@confirm')->name('confirm');
Route::get('/consultation', 'AppointmentController@consultation')->name('consultation');
// Trainning route
Route::prefix('trainning')->group(function() {
    Route::get('/badges', 'TrainningController@badges');
});