<?php

    Route::prefix('admin')->group(function(){
        Route::prefix('recruiter-category')->group(function(){
            Route::get('list','RecruiterCategoryController@getIndex')->name('recruiter_category.get.list');
            Route::get('create','RecruiterCategoryController@getCreate')->name('recruiter_category.get.create');
            Route::post('create','RecruiterCategoryController@postCreate')->name('recruiter_category.post.create');
            Route::get('edit/{id}','RecruiterCategoryController@getEdit')->name('recruiter_category.get.edit');
            Route::post('edit/{id}','RecruiterCategoryController@postEdit')->name('recruiter_category.post.edit');
        });

        Route::prefix('major')->group(function(){
            Route::get('list','MajorController@getIndex')->name('major.get.list');
            Route::get('create','MajorController@getCreate')->name('major.get.create');
            Route::post('create','MajorController@postCreate')->name('major.post.create');
            Route::get('edit/{id}','MajorController@getEdit')->name('major.get.edit');
            Route::post('edit/{id}','MajorController@postEdit')->name('major.post.edit');
        });
    });


