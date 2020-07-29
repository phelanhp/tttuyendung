<?php
namespace PPM\Home\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PPM\Category\Entities\Recruiter;
use PPM\Category\Entities\Student;
use PPM\User\Entities\User;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class ProfileRecruiterController extends Controller{

    public function getRecruiterProfile(){
        if (Auth::guard('user')->check()){
            $user = User::find(Auth::guard('user')->id());

            return view('Home::recruiter-profile.profile', compact('user'));
        }

        return redirect()->route('get.login.index');
    }

    public function getRecruiterEdit(){
        if (Auth::guard('user')->check()){
            $user = User::find(Auth::guard('user')->id());

            return view('Home::recruiter-profile.edit', compact('user'));
        }
        return redirect()->route('get.login.index');
    }

    public function postRecruiterEdit(Request $request){
        if (Auth::guard('user')->check()){
            $user        = User::find(Auth::guard('user')->id());
            $user->name  = $request->name;
            $user->hobby = $request->hobby;
            if ($request->file('avatar')){
                $image = time() . '-' . $request->file('avatar')->getClientOriginalName();
                $request->file('avatar')->move('upload/images/users', $image);
                $user->avatar = 'upload/images/users/' . $image;
            }
            $user->update();

            $recruiter = Recruiter::where('user_id', $user->id)->first();
            $request_recruiter = $request->only(['company','address','founding','email','phone']);
            $recruiter->update($request_recruiter);

            $request->session()->flash('success', 'Chỉnh Sửa Thành Công!');
            return redirect()->route('get.recruiter_profile.profile',$user->id);

        }
    }

    public function getInteractionStudent(Request $request){
        $user        = User::find(Auth::guard('user')->id());
        $recruiter = Recruiter::where('user_id', $user->id)->first();
        $posts = $user->posts;
        $post_comments = [];
        $post_likes = [];
        foreach ($posts as $key => $post) {
            $post_comments[] = $post->postComments;
            $post_likes[] = $post->postLikes;
        }

        $data=[];
        $i = 0;

        foreach ($post_comments as $post_comment) {
            foreach ($post_comment as $comment) {
                if($comment->user->group->key === 'sinh-vien'){
                    $data[$i]['id'] = $comment->id;
                    $data[$i]['post_id'] = $comment->post_id;
                    $data[$i]['user_id'] = $comment->user_id;
                    $data[$i]['name'] = $comment->user->name;
                    $data[$i]['post'] = $comment->post->name;
                    $data[$i]['major'] = $comment->user->student->major->name;
                    $data[$i]['active'] = 'comment';
                    $data[$i]['created_at'] = strtotime($comment->created_at);
                    $i++;
                }
            }
        }

        foreach ($post_likes as $post_like) {
            foreach ($post_like as $like) {
                if($like->user->group->key === 'sinh-vien'){
                    $data[$i]['id'] = $like->id;
                    $data[$i]['post_id'] = $like->post_id;
                    $data[$i]['user_id'] = $like->user_id;
                    $data[$i]['name'] = $like->user->name;
                    $data[$i]['post'] = $like->post->name;
                    $data[$i]['major'] = $like->user->student->major->name;
                    $data[$i]['active'] = 'like';
                    $data[$i]['created_at'] = strtotime($like->created_at);
                    $i++;
                }
            }
        }

        $data = sortArrayByAttribute($data, 'created_at', SORT_DESC);

        $interactions = [];
        $j = 0;
        foreach ($data as $key => $item) {
            $interactions[$j]['post_id'] = $item['post_id'];
            $interactions[$j]['user_id'] = $item['user_id'];
            $interactions[$j]['name'] = $item['name'];
            $interactions[$j]['major'] = $item['major'];
            $interactions[$j]['post'] = $item['post'];
            $interactions[$j]['active'] = ($item['active'] === 'like') ? 'Like' : 'Comment';
            $j++;
        }

        $interactions = array_unique($interactions, SORT_REGULAR);

        //Pagination
        $per_page = 20;
        $page = isset($request->page) ? $request->page : 1;
        $offset = ((int)$page * $per_page) - $per_page;

        $interactions =  new LengthAwarePaginator(
            array_slice($interactions, $offset, $per_page, true),
            count($interactions), 
            $per_page, 
            $page, 
            ['path' => $request->url(), 'query' => $request->query()]
        );

        return view('Home::recruiter-profile.interaction_student', compact('interactions'));
    }
    public function getInteractionStudentList(Request $request){
        $user        = User::find(Auth::guard('user')->id());
        $recruiter = Recruiter::where('user_id', $user->id)->first();
        $posts = $user->posts;
        $post_comments = [];
        $post_likes = [];
        foreach ($posts as $key => $post) {
            $post_comments[] = $post->postComments;
            $post_likes[] = $post->postLikes;
        }

        $data=[];
        $i = 0;

        foreach ($post_comments as $post_comment) {
            foreach ($post_comment as $comment) {
                if($comment->user->group->key === 'sinh-vien'){
                    $data[$i]['id'] = $comment->id;
                    $data[$i]['post_id'] = $comment->post_id;
                    $data[$i]['user_id'] = $comment->user_id;
                    $data[$i]['name'] = $comment->user->name;
                    $data[$i]['post'] = $comment->post->name;
                    $data[$i]['major'] = $comment->user->student->major->name;
                    $data[$i]['active'] = 'comment';
                    $data[$i]['created_at'] = strtotime($comment->created_at);
                    $i++;
                }
            }
        }

        foreach ($post_likes as $post_like) {
            foreach ($post_like as $like) {
                if($like->user->group->key === 'sinh-vien'){
                    $data[$i]['id'] = $like->id;
                    $data[$i]['post_id'] = $like->post_id;
                    $data[$i]['user_id'] = $like->user_id;
                    $data[$i]['name'] = $like->user->name;
                    $data[$i]['post'] = $like->post->name;
                    $data[$i]['major'] = $like->user->student->major->name;
                    $data[$i]['active'] = 'like';
                    $data[$i]['created_at'] = strtotime($like->created_at);
                    $i++;
                }
            }
        }

        $data = sortArrayByAttribute($data, 'created_at', SORT_DESC);

        $interactions = [];
        $j = 0;
        foreach ($data as $key => $item) {
            $interactions[$j]['user_id'] = $item['user_id'];
            $interactions[$j]['name'] = $item['name'];
            $interactions[$j]['major'] = $item['major'];
            $j++;
        }

        $interactions = array_unique($interactions, SORT_REGULAR);

        //Pagination
        $per_page = 20;
        $page = isset($request->page) ? $request->page : 1;
        $offset = ((int)$page * $per_page) - $per_page;

        $interactions =  new LengthAwarePaginator(
            array_slice($interactions, $offset, $per_page, true),
            count($interactions), 
            $per_page, 
            $page, 
            ['path' => $request->url(), 'query' => $request->query()]
        );
            return view('Home::recruiter-profile.interaction_student_list', compact('interactions'));
        }
}
?>
