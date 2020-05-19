<?php

Route::prefix('admin')->group(function (){
    Route::prefix('post-category')->group(function (){
        Route::get('list', 'PostCategoryController@getIndex')->name('post_category.get.list');
        Route::get('create', 'PostCategoryController@getCreate')->name('post_category.get.create');
        Route::post('create', 'PostCategoryController@postCreate')->name('post_category.post.create');
        Route::get('edit/{id}', 'PostCategoryController@getEdit')->name('post_category.get.edit');
        Route::post('edit/{id}', 'PostCategoryController@postEdit')->name('post_category.post.edit');
        Route::get('delete/{id}', 'PostCategoryController@delete')->name('post_category.get.delete');
    });

    Route::prefix('post')->group(function (){
        Route::get('list', 'PostController@getIndex')->name('post.get.list');
        Route::get('create', 'PostController@getCreate')->name('post.get.create');
        Route::post('create', 'PostController@postCreate')->name('post.post.create');
        Route::get('edit/{id}', 'PostController@getEdit')->name('post.get.edit');
        Route::post('edit/{id}', 'PostController@postEdit')->name('post.post.edit');
        Route::get('delete/{id}', 'PostController@delete')->name('post.get.delete');
        Route::get('comment-list/{id}', 'PostController@commentList')->name('post.get.comment_list');
        Route::get('comment-delete/{id}', 'PostController@commentDelete')->name('post.get.comment_delete');
    });
});
