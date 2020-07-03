<?php
namespace PPM\Home\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PPM\Post\Entities\Post;
use PPM\Post\Entities\PostCategory;
use PPM\Post\Entities\PostComment;
use PPM\Post\Entities\PostLike;
use PPM\User\Entities\User;

class NewsController extends Controller{

    public function getNewIndex(){
        $post_categories = PostCategory::get();
        $posts           = Post::orderBy('created_at', 'DESC')->paginate(6);
        $post_likes      = PostLike::where('user_id', Auth::guard('user')->id())
                                   ->get();
        $liked           = [];
        foreach ($post_likes as $like){
            $liked[$like->user_id][$like->post_id] = $like->status;
        }

        return view('Home::news.index', compact('posts', 'liked', 'post_categories'));
    }

    public function getNewsByCategory($id){
        $post_categories = PostCategory::get();
        $news_category   = PostCategory::find($id);
        $posts           = Post::where('category_id', $news_category->id)->paginate(6);

        $post_likes = PostLike::where('user_id', Auth::guard('user')->id())
                              ->get();
        $liked      = [];
        foreach ($post_likes as $like){
            $liked[$like->user_id][$like->post_id] = $like->status;
        }

        return view('Home::news.index', compact('posts', 'liked', 'post_categories'));
    }

    public function getNewsSearch(Request $request){
        $post_categories = PostCategory::get();
        $posts           = Post::where('name', 'LIKE', '%' . $request->key_search . '%')
                               ->paginate(6);

        $post_likes = PostLike::where('user_id', Auth::guard('user')->id())
                              ->get();
        $liked      = [];
        foreach ($post_likes as $like){
            $liked[$like->user_id][$like->post_id] = $like->status;
        }

        return view('Home::news.index', compact('posts', 'liked', 'post_categories'));
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
        if (Auth::guard('user')->check()){
            $categories = PostCategory::all();

            return view('Home::news-manager.create', compact('categories'));
        }

        return redirect()->route('get.login.index');

    }

    public function postNewsCreate(Request $request){
        if (Auth::guard('user')->check()){
            $user  = User::find(Auth::guard('user')->id());
            $post  = $request->all();
            $news  = new Post($post);
            $image = time() . '-' . $request->file('image')->getClientOriginalName();
            $request->file('image')->move('upload/images/posts', $image);
            $news->image   = 'upload/images/posts/' . $image;
            $news->user_id = $user->id;

            $news->save();

            return redirect()->route('get.news_manager.list');
        }

        return redirect()->route('get.login.index');
    }

    public function getNewsEdit($id){
        if (Auth::guard('user')->check()){
            $categories = PostCategory::all();
            $news       = Post::find($id);

            return view('Home::news-manager.edit', compact('categories', 'news'));
        }

        return redirect()->route('get.login.index');
    }

    public function postNewsEdit(Request $request, $id){
        if (Auth::guard('user')->check()){
            $data = Post::find($id);
            $data->update($request->all());
            if ($request->file('image')){
                $image = time() . '-' . $request->file('image')->getClientOriginalName();
                $request->file('image')->move('upload/images/posts', $image);
                $data->image = 'upload/images/posts/' . $image;
            }
            if ($data->save()){
                $request->session()->flash('success', 'Chỉnh sửa thành công!');

                return redirect()->back();
            }
            $request->session()->flash('danger', 'Không thể chỉnh sửa');

            return redirect()->back();
        }

        return redirect()->route('get.login.index');
    }

    public function delete($id){
        $data = Post::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function postComment(Request $request){
        if (Auth::guard('user')->check()){
            $comment = new PostComment($request->all());
            $comment->save();

            $comments = PostComment::where('post_id', $request->post_id)
                                   ->orderBy('created_at', 'DESC')
                                   ->get();

            $returnHTML = view('Home::news.post_comment')
                ->with('postComments', $comments)
                ->render();

            return response()->json(['success' => TRUE, 'html' => $returnHTML]);
        }

        return "Vui lòng đăng nhập để bình luận";
    }

    public function postLike(Request $request){
        if (Auth::guard('user')->check()){
            $like = PostLike::where('post_id', $request->post_id)
                            ->where('user_id', $request->user_id)
                            ->first();

            if (isset($like)){
                if ($like->status == 0){
                    $like->status = 1;
                }else{
                    $like->status = 0;
                }
                $like->save();
            }else{
                $like          = new PostLike();
                $like->post_id = $request->post_id;
                $like->user_id = $request->user_id;
                $like->status  = 1;
                $like->save();
            }

            return $like->status;
        }

        return "<script>alert('Vui lòng đăng nhập để like')</script>";
    }
}

?>
