<?php
namespace PPM\Home\Http\Controllers;

use App\Http\Controllers\Controller;
use PPM\Category\Entities\Recruiter;
use PPM\Post\Entities\Post;
use PPM\Category\Entities\RecruiterCategory;
use Illuminate\Http\Request;
class RecruiterController extends Controller{

    public function getRecruiterIndex(){
        $recruiters = Recruiter::paginate(6);
        $posts = Post::orderBy('created_at','DESC')->get();
        $recruiterCategorys = RecruiterCategory::get();
        return view('Home::recruiter.index', compact('recruiters','posts','recruiterCategorys',));
    }

    public function getRecruiterByCategory($id){
        $recruiter_category = RecruiterCategory::find($id);
        $recruiters = Recruiter::where('category_id',$recruiter_category->id)->paginate(6);

        $posts = Post::orderBy('created_at','DESC')->get();
        $recruiterCategorys = RecruiterCategory::get();
        return view('Home::recruiter.index', compact('recruiters','posts','recruiterCategorys'));
    }
    public function getRecruiterSearch(Request $request){
        $recruiters = Recruiter::where('company','LIKE','%'.$request->key_search.'%')->paginate(6);

        $posts = Post::orderBy('created_at','DESC')->get();
        $recruiterCategorys = RecruiterCategory::get();
        return view('Home::recruiter.index', compact('recruiters','posts','recruiterCategorys'));
    }

    public function getRecruiterDetail($id)
    {
    	$recruiters = Recruiter::find($id);
    	$posts = Post::orderBy('created_at')->get();
        return view('Home::recruiter.detail',compact('recruiters','posts'));
    }
}

?>
