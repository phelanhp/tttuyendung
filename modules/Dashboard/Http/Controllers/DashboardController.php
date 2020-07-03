<?php

namespace PPM\Dashboard\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PPM\Category\Entities\Recruiter;
use PPM\Category\Entities\Student;
use PPM\Post\Entities\Post;

class DashboardController extends Controller{

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(){
        # parent::__construct();
        $this->middleware('auth:admins');
    }

    public function index(Request $request){
        $posts     = Post::all();
        $post      = Post::count();
        $recruiter = Recruiter::count();
        $student   = Student::count();
        $today     = date("Y-m-d");
        $today     = strtotime($today . ' 00:00:00');

        $post_now = 0;
        foreach ($posts as $key => $item){
            $create_at = strtotime($item->created_at);
            if ($create_at > $today){
                $post_now += 1;
            }
        }

        return view('Dashboard::backend.layout.index',
            compact('post', 'post_now', 'recruiter', 'student'));
    }
}
