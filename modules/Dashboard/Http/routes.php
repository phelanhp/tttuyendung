<?php
$namespace = 'PPM\Dashboard\Http\Controllers';
Route::group(
    ['module'=>'Dashboard', 'namespace' => $namespace,'middleware' => ['web']],
    function() {

    	require('Routes\web.php');
    	require('Routes\admin.php');
    	require('Routes\api.php');
});
