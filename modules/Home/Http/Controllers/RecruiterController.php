<?php
namespace PPM\Home\Http\Controllers;

use App\Http\Controllers\Controller;
use PPM\Category\Entities\Recruiter;
use PPM\Post\Entities\Post;
class RecruiterController extends Controller{

    public function getRecruiterIndex(){
        $recruiters = Recruiter::get();
        $posts = Post::orderBy('created_at','DESC')->paginate(3);
        return view('Home::recruiter.index', compact('recruiters','posts'));
    }

    public function getRecruiterDetail(){
        return view('Home::recruiter.detail');
    }
}

?>
