<?php

namespace PPM\Home\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller{

	public function getIndex(){
		return view('Home::home.index');
	}

	public function getRecruiterIndex(){
		return view('Home::recruiter.index');
	}

	public function getRecruiterDetail(){
		return view('Home::recruiter.detail');
	}

}