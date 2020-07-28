<?php
namespace PPM\Post\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PPM\Post\Entities\Post;
use PPM\Post\Entities\PostCategory;
use PPM\Post\Entities\PostComment;
use PPM\User\Entities\UserGroup;


class PostController extends Controller{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(){
        # parent::__construct();
        $this->middleware('auth:admins');
    }

    public function getIndex(){
        $data = Post::paginate(6);
        return view('Post::post.list',compact('data'));
    }

    public function getEdit($id){
        $data = Post::find($id);
        $categories = PostCategory::where('status',1)->get();
        return view('Post::post.edit',compact('data','categories'));
    }

    public function postEdit($id, Request $request){
        $data = Post::find($id);
        $data->update($request->all());
        if($request->file('image')){
            $image = time().'-'.$request->file('image')->getClientOriginalName();
            $request->file('image')->move('upload/images/posts',$image);
            $data->image = 'upload/images/posts/'.$image;
        }
        if($data->save()){
            $request->session()->flash('success','Chỉnh sửa thành công!');
            return redirect()->route('post.get.list');
        }
        $request->session()->flash('danger','Không thể chỉnh sửa');
        return redirect()->back();
    }

    public function delete(Request $request ,$id){
        $data = Post::find($id);
        $data->delete();
        $request->session()->flash('danger','Xóa thành công!');
        return redirect()->back();
    }

    public function commentList($post_id){
        $post = Post::with('postComments')->where('id',$post_id)->first();
        $comments = $post->postComments;
        $returnHTML = view('Post::post.comment_list')->with('comments', $comments)->render();
        return response()->json(array('success' => true, 'html'=>$returnHTML));
    }

    public function commentDelete( Request $request ,$id){
        $comment = PostComment::find($id);
        $comment->delete();
        $request->session()->flash('danger','Xóa thành công!');
        return response()->json();
    }

    public function getShowComment(Request $request){
        $comment = PostComment::find($request->id);
        if($request->status == 0){
            $comment->status = 1;
        }else{
            $comment->status = 0;
        }
        $comment->update();

        return '';
    }
}
