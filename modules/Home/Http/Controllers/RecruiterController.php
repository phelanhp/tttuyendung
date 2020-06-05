<?php 
namespace PPM\Home\Http\Controllers;

use App\Http\Controllers\Controller;

class RecruiterController extends Controller{
	public function getRecruiterIndex(){
		return view('Home::recruiter.index');
	}

	public function getRecruiterDetail(){
		return view('Home::recruiter.detail');
	}
}

 ?>