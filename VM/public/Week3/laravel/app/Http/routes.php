<?php

#Api Routes
Route::group(array('prefix' => 'api'), function(){
	Route::get('rooms', 'RoomsController@index');
	Route::post('room', 'RoomsController@store');
	Route::get('room/{id}', 'RoomsController@update');

	Route::get('guests', 'GuestsController@index');
	Route::post('guest', 'GuestdController@store');
	Route::get('guest/{id}', 'GuestsController@update');

	Route::get('bookings', 'BookingsController@index');
	Route::post('booking/{id}', 'BookingsController@store');
	Route::get('booking/{id}', 'BookingsController@update');

	
	//Route::resource('rooms', 'RoomsController');
});

