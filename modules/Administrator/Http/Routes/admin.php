<?php

	Route::prefix('admin')->group(function(){
		Route::prefix('administrator')->group(function(){
	    	Route::get('list','AdministratorController@getList')->name('get.list.admin');
	    	Route::get('create','AdministratorController@getCreate')->name('get.create.admin');
	    	Route::post('create','AdministratorController@postCreate')->name('post.create.admin');
	    	Route::get('edit/{id}','AdministratorController@getEdit')->name('get.edit.admin');
	    	Route::post('edit/{id}','AdministratorController@postEdit')->name('post.edit.admin');
	    	Route::get('delete/{id}','AdministratorController@getDelete')->name('get.delete.admin');
	    });
	    Route::prefix('group/administration')->group(function(){
    		Route::get('index','AdminGroupController@getIndex')->name('get.create.admin_group');
    		Route::post('index','AdminGroupController@postCreate')->name('post.create.admin_group');
    		Route::get('edit/{id}','AdminGroupController@getEdit')->name('get.edit.admin_group');
    		Route::post('edit/{id}','AdminGroupController@postEdit')->name('post.edit.admin_group');
    		Route::get('delete/{id}','AdminGroupController@getDelete')->name('get.delete.admin_group');
		});
    });

	// Route::prefix('admin')->group(function(){
	// 	Route::prefix('base')->group(function(){
 //    		Route::get('outdex','AdminController@outdex');
 //    	});
	// });
    	

