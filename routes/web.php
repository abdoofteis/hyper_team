<?php

Route::get('/hyperteam','Control@Home')->name('home');
Route::get('/hyperteam/contactus','ContactController@Contact')->name('contactus');
Route::post('/contactus','ContactController@store');
