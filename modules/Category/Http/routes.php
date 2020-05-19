<?php
$namespace = 'PPM\Category\Http\Controllers';
Route::group(
    ['module'=>'Category', 'namespace' => $namespace,'middleware' => ['web']],
    function() {

    	require('Routes\web.php');
    	require('Routes\admin.php');
    	require('Routes\api.php');
});
