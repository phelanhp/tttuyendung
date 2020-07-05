<?php

Route::get('/login', 'LoginController@getLogin')->name('get.login.index');
Route::post('/login', 'LoginController@postLogin')->name('post.login.index');
Route::get('/logout', 'LoginController@logout')->name('get.logout.index');


Route::get('/', 'HomeController@getIndex')->name('get.home.index');
Route::get('/contact', 'HomeController@getContact')->name('get.contact.index');
Route::prefix('recruiter')->group(function (){
    //Recruiter home
    Route::get('/', 'RecruiterController@getRecruiterIndex')->name('get.recruiter.index');
    Route::get('/detail/{id}', 'RecruiterController@getRecruiterDetail')
         ->name('get.recruiter.detail');
    Route::get('/search-by-category/{id}', 'RecruiterController@getRecruiterByCategory')
         ->name('get.recruiter_by_category.search');
    Route::get('/search-company', 'RecruiterController@getRecruiterSearch')
         ->name('get.recruiter_company.search');

    //Profile
    Route::get('/profile', 'ProfileRecruiterController@getRecruiterProfile')
         ->name('get.recruiter_profile.profile');
    Route::get('/edit', 'ProfileRecruiterController@getRecruiterEdit')
         ->name('get.recruiter_profile.edit');
    Route::post('/edit', 'ProfileRecruiterController@postRecruiterEdit')
         ->name('post.recruiter_profile.edit');
});
Route::prefix('student')->group(function (){
    Route::get('/{id}', 'StudentController@getProfileStudent')
         ->name('get.student.profile');
    Route::get('/edit', 'StudentController@getEditStudent')
         ->name('get.student.edit');
    Route::get('/activity', 'StudentController@getActivityStudent')
         ->name('get.student.activity');
    Route::post('/edit', 'StudentController@postEditStudent')
         ->name('post.student.edit');
});
Route::prefix('news')->group(function (){
    Route::get('/', 'NewsController@getNewIndex')->name('get.news.index');
    Route::get('/detail/{id}', 'NewsController@getNewsDetail')->name('get.news.detail');
    Route::get('/search-by-category/{id}', 'NewsController@getNewsByCategory')
         ->name('get.news_by_category.search');
    Route::get('/search-name', 'NewsController@getNewsSearch')
         ->name('get.news_name.search');
    Route::get('/list', 'NewsController@getNewList')->name('get.news_manager.list');
    Route::get('/create', 'NewsController@getNewsCreate')->name('get.news_manager.create');
    Route::post('/create', 'NewsController@postNewsCreate')->name('post.news_manager.create');
    Route::get('/edit/{id}', 'NewsController@getNewsEdit')->name('get.news_manager.edit');
    Route::post('/edit/{id}', 'NewsController@postNewsEdit')->name('post.news_manager.edit');
    Route::get('/delete/{id}', 'NewsController@delete')->name('get.news_manager.delete');
    Route::get('/recruitment/list', 'NewsController@getRecruitmentList')
         ->name('get.recruitment.list');
    Route::post('/recruitment/{id}', 'NewsController@postRecruitment')->name('post.recruitment');
    Route::get('/recruitment/delete/{id}', 'NewsController@getRecruitmentDelete')
         ->name('get.recruitment.delete');
});

Route::post('/comment', 'NewsController@postComment')->name('post.comment');
Route::get('/like', 'NewsController@postLike')->name('post.like');
