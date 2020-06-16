<?php

Route::get('/login', 'LoginController@getLogin')->name('get.login.index');
Route::post('/login', 'LoginController@postLogin')->name('post.login.index');
Route::get('/logout', 'LoginController@logout')->name('get.logout.index');


Route::get('/', 'HomeController@getIndex')->name('get.home.index');
Route::get('/contact', 'HomeController@getContact')->name('get.contact.index');
Route::prefix('recruiter')->group(function (){
    Route::get('/', 'RecruiterController@getRecruiterIndex')->name('get.recruiter.index');
    Route::get('/detail/{id}', 'RecruiterController@getRecruiterDetail')
         ->name('get.recruiter.detail');
    Route::get('/profile', 'ProfileRecruiterController@getRecruiterProfile')
         ->name('get.recruiter-profile.profile');
    Route::get('/edit', 'ProfileRecruiterController@getRecruiterEdit')
         ->name('get.recruiter-profile.edit');
    Route::post('/edit', 'ProfileRecruiterController@postRecruiterEdit')
         ->name('post.recruiter-profile.edit');
});
Route::prefix('news')->group(function (){
    Route::get('/', 'NewsController@getNewIndex')->name('get.news.index');
    Route::get('/detail/{id}', 'NewsController@getNewsDetail')->name('get.news.detail');
    Route::get('/list', 'NewsController@getNewList')->name('get.news-manager.list');
    Route::get('/create', 'NewsController@getNewsCreate')->name('get.news-manager.create');
});

Route::post('/comment', 'NewsController@postComment')->name('post.comment');
Route::get('/like', 'NewsController@postLike')->name('post.like');
