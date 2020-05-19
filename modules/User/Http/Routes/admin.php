<?php

//    Route::get('index','BaseController@index');

	 Route::prefix('admin')->group(function(){
	 	Route::prefix('user_group')->group(function(){
     		Route::get('list','UserGroupController@getIndex')->name('user_group.get.list');
            Route::get('create','UserGroupController@getCreate')->name('user_group.get.create');
            Route::post('create','UserGroupController@postCreate')->name('user_group.post.create');
            Route::get('edit/{id}','UserGroupController@getEdit')->name('user_group.get.edit');
            Route::post('edit/{id}','UserGroupController@postEdit')->name('user_group.post.edit');
     	});

         Route::prefix('user')->group(function(){
             Route::get('recruiter-list','UserController@getRecruiterIndex')->name('user.get.recruiter_list');
             Route::get('student-list','UserController@getStudentIndex')->name('user.get.student_list');
             Route::get('create','UserController@getCreate')->name('user.get.create');
             Route::post('create','UserController@postCreate')->name('user.post.create');
             Route::get('edit/{id}','UserController@getEdit')->name('user.get.edit');
             Route::post('edit/{id}','UserController@postEdit')->name('user.post.edit');
             Route::get('delete/{id}','UserController@delete')->name('user.get.delete');
         });
	 });


