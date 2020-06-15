<?php
namespace PPM\Home\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PPM\Post\Entities\Post;
use PPM\Post\Entities\PostComment;
use PPM\User\Entities\User;

class NewsController extends Controller{

    public function getNewIndex(){
        $posts = Post::orderBy('created_at', 'DESC')->paginate(6);

        return view('Home::news.index', compact('posts'));
    }

    public function getNewsDetail($id){
        $post         = Post::find($id);
        $postComments = PostComment::where('post_id', $id)
                                   ->orderBy('created_at', 'DESC')
                                   ->get();

        return view('Home::news.detail', compact('post', 'postComments'));
    }

    public function getNewList(){
        if (Auth::guard('user')->check()){
            $user = User::find(Auth::guard('user')->id());

            return view('Home::news-manager.list', compact('user'));
        }

        return redirect()->route('get.login.index');
    }

    public function getNewsCreate(){
        return view('Home::news-manager.create');
    }

    public function postComment(Request $request){
        if (Auth::guard('user')->check()){
            $comment = new PostComment($request->all());
            $comment->save();

            $comments = PostComment::where('post_id', $request->post_id)
                                   ->orderBy('created_at', 'DESC')
                                   ->get();

            $returnHTML = view('Home::news.post_comment')->with('postComments', $comments)->render();
            return response()->json(array('success' => true, 'html'=>$returnHTML));
        }

        return redirect()->route('get.login.index');
    }
}

?>
