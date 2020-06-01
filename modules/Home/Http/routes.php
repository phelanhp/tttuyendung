<?php
$namespace = 'PPM\Home\Http\Controllers';
Route::group(
    ['module'=>'Home', 'namespace' => $namespace,'middleware' => ['web']],
    function() {
    	require('Routes\web.php');
});
