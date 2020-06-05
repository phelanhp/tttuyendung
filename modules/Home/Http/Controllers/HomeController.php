<?php

namespace PPM\Home\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller{

	public function getIndex(){
		return view('Home::home.index');
	}

	public function getContact(){
		return view('Home::Contact.contact');
	}

}
?>