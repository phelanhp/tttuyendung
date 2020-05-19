<?php
$namespace = 'PPM\Sample\Http\Controllers';
Route::group(
    ['module'=>'Sample', 'namespace' => $namespace,'middleware' => ['web']],
    function() {

    	require('Routes\web.php');
    	require('Routes\admin.php');
    	require('Routes\api.php');
});
