<?php

/*
 * |--------------------------------------------------------------------------
 * | Application Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register all of the routes for an application.
 * | It's a breeze. Simply tell Laravel the URIs it should respond to
 * | and give it the controller to call when that URI is requested.
 * |
 */
Route::get('rooms', 'RoomsController@index');
Route::get('room', 'RoomsController@store');
Route::post('room/{id}', 'RoomsController@update');

Route::get('guests', 'GuestsController@index');
Route::get('guest', 'GuestsController@store');
Route::post('guest/{id}', 'GuestsController@update');

Route::get('bookings', 'BookingsController@index');
Route::get('booking', 'BookingsController@store');
Route::post('booking/{id}', 'BookingsController@update');

