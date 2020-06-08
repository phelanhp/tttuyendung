<?php 
namespace PPM\Home\Http\Controllers;

use App\Http\Controllers\Controller;
use PPM\Post\Entities\Post;
class ProfileRecruiterController extends Controller{
	public function getRecruiterProfile(){
		$posts = Post::orderBy('created_at','DESC')->paginate(3);
		return view('Home::recruiter-profile.profile', compact('posts'));
	}
	public function getRecruiterEdit(){
		return view('Home::recruiter-profile.edit');
	}
}

 ?>