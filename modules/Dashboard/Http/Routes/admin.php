<?php
	Route::prefix('admin')->group(function(){
    	Route::get('/','DashboardController@index')->name('get.index.dashboard');

		Route::prefix('auth')->group(function(){
    		Route::get('login.html','AuthController@getLogin')->name('login');
    		Route::post('login','AuthController@postLogin')->name('post.login');
    		Route::get('logout','AuthController@getLogout')->name('get.logout');
		});
	});


	// 	Route::prefix('base')->group(function(){
 //    		Route::get('outdex','AdminController@outdex');
 //    	});
    	

