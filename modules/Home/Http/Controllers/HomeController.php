<?php

namespace PPM\Home\Http\Controllers;

use App\Http\Controllers\Controller;
use PPM\Post\Entities\Post;

class HomeController extends Controller{
	public function getLogin(){
		return view('Home::login.index');
	}
	public function getIndex(){
	    $posts = Post::orderBy('created_at','DESC')->get();
		return view('Home::home.index', compact('posts'));
	}

	public function getContact(){
		return view('Home::contact.contact');
	}

}
