<?php
namespace PPM\Home\Http\Controllers;

use App\Http\Controllers\Controller;
use PPM\Post\Entities\Post;
use PPM\Post\Entities\PostComment;
use PPM\User\Entities\User;

class NewsController extends Controller{
	public function getNewIndex(){
	    $posts = Post::orderBy('created_at','DESC')->paginate(6);
		return view('Home::news.index',compact('posts'));
	}
	public function getNewsDetail($id){
		$postComments = PostComment::get();
        $post = Post::find($id);
		return view('Home::news.detail',compact('post','postComments'));
	}
	public function getNewList(){
		return view('Home::news-manager.list');
	}
	public function getNewsCreate(){
		return view('Home::news-manager.create');
	}	
}

 ?>
