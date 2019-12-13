<?php

Route::get('/hyperteam','Control@Home');
Route::get('/hyperteam/contactus','ContactController@Contact');
Route::post('/contactus','ContactController@store');
