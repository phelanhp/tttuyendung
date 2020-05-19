<?php
$namespace = 'PPM\Post\Http\Controllers';
Route::group(
    ['module'=>'Post', 'namespace' => $namespace,'middleware' => ['web']],
    function() {

    	require('Routes\web.php');
    	require('Routes\admin.php');
});
