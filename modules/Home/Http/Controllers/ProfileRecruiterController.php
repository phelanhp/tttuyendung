<?php 
namespace PPM\Home\Http\Controllers;

use App\Http\Controllers\Controller;

class ProfileRecruiterController extends Controller{
	public function getRecruiterProfile(){
		return view('Home::recruiter-profile.profile');
	}
	public function getRecruiterEdit(){
		return view('Home::recruiter-profile.edit');
	}
}

 ?>