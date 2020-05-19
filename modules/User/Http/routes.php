<?php
$namespace = 'PPM\User\Http\Controllers';
Route::group(
    ['module'=>'User', 'namespace' => $namespace,'middleware' => ['web']],
    function() {

    	require('Routes\web.php');
    	require('Routes\admin.php');
});
