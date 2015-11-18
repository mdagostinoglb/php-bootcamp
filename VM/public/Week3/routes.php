<?php
#Api Routes
Route::group(array('prefix' => 'api'), function(){
//room
	Route::get('rooms', 'RoomsController@index');
    Route::get('room/{id}','RoomsController@room');
	Route::post('room', 'RoomsController@store');
	Route::post('room/{id}', 'RoomsController@update');
//client
    Route::get('clients', 'ClientsController@index');
    Route::get('client/{id}','ClientsController@client');
	Route::post('client', 'ClientsController@store');
	Route::post('client/{id}', 'ClientsController@update');
//booking
    Route::get('bookings', 'BookingsController@index');
    Route::get('booing/{id}','BookingsController@booking');
	Route::post('booking', 'BookingsController@store');
	Route::post('booking/{id}', 'BookingsController@update');
	
	
})
