<?php

Route::get('/','HomeController@getIndex');

Route::prefix('recruiter')->group(function(){
	Route::get('/','HomeController@getRecruiterIndex')->name('get.recruiter.index');
	Route::get('/detail','HomeController@getRecruiterDetail')->name('get.recruiter.detail');	
});
