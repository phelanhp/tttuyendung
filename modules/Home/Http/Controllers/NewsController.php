<?php 
namespace PPM\Home\Http\Controllers;

use App\Http\Controllers\Controller;

class NewsController extends Controller{
	public function getNewIndex(){
		return view('Home::news.index');
	}
	public function getNewsDetail(){
		return view('Home::news.detail');
	}
	public function getNewList(){
		return view('Home::news-manager.list');
	}
	public function getNewsCreate(){
		return view('Home::news-manager.create');
	}
}

 ?>