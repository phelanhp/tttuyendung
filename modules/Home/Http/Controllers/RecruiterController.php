<?php
namespace PPM\Home\Http\Controllers;

use App\Http\Controllers\Controller;
use PPM\Category\Entities\Recruiter;
use PPM\Post\Entities\Post;

class RecruiterController extends Controller{

    public function getRecruiterIndex(){
        $recruiters = Recruiter::paginate(6);
        $posts = Post::orderBy('created_at','DESC')->get();
        return view('Home::recruiter.index', compact('recruiters','posts'));
    }

    public function getRecruiterDetail($id)
    {
    	$recruiters = Recruiter::find($id);
    	$posts = Post::orderBy('created_at')->get();
        return view('Home::recruiter.detail',compact('recruiters','posts'));
    }
}

?>
