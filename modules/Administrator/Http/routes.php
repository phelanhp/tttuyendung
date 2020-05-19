<?php
$namespace = 'PPM\Administrator\Http\Controllers';
Route::group(
    ['module'=>'Administrator', 'namespace' => $namespace,'middleware' => ['web']],
    function() {

    	require('Routes\web.php');
    	require('Routes\admin.php');
    	require('Routes\api.php');
});
