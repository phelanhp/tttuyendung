<?php
namespace PPM\Home\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PPM\Category\Entities\Recruitment;
use PPM\Post\Entities\Post;
use PPM\Post\Entities\PostCategory;
use PPM\Post\Entities\PostComment;
use PPM\Post\Entities\PostLike;
use PPM\User\Entities\User;

class NewsController extends Controller{

    public function getNewIndex(){
        $post_categories = PostCategory::get();
        $posts           = Post::orderBy('created_at', 'DESC')->paginate(12);
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
                               ->paginate(12);

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

    public function postRecruitment(Request $request, $id){
        $news        = Post::find($id);
        $recruitment = Recruitment::where('user_id', $request->user_id)
                                  ->where('post_id', $news->id)
                                  ->first();

        if (isset($recruitment)){
            $recruitment->name = $request->name;
            dd($request->name);
            $recruitment->email = $request->email;
            if ($request->file('cv_profile')){
                if (file_exists($recruitment->cv_profile)){
                    unlink($recruitment->cv_profile);
                }
                $profile = time() . '-' . $request->file('cv_profile')->getClientOriginalName();
                $request->file('cv_profile')
                        ->move('upload/profile/recruitment/student/' . $request->user_id, $profile);
                $recruitment->cv_profile = 'upload/profile/recruitment/student/' . $request->user_id . '/' . $profile;
            }
            $recruitment->save();
        }else{

            $recruitment               = new Recruitment();
            $recruitment->user_id      = $request->user_id;
            $recruitment->recruiter_id = $news->user_id;
            $recruitment->post_id      = $news->id;
            $recruitment->name         = $request->name;
            $recruitment->email        = $request->email;
            if ($request->file('cv_profile')){
                $profile = time() . '-' . $request->file('cv_profile')->getClientOriginalName();
                $request->file('cv_profile')
                        ->move('upload/profile/recruitment/student/' . $request->user_id, $profile);
                $recruitment->cv_profile = 'upload/profile/recruitment/student/' . $request->user_id . '/' . $profile;
            }
            $request->session()->flash('success', 'Ứng Tuyển Thành Công!');
            $recruitment->save();
        }

        return back();
    }

    public function getRecruitmentList(){
        if (Auth::guard('user')->check()){
            $user = User::find(Auth::guard('user')->id());

            $recruitment = Recruitment::where('recruiter_id', $user->id)->get();

            return view('Home::recruiter-profile.recruitment', compact('user', 'recruitment'));
        }

        return redirect()->route('get.login.index');
    }

    public function getRecruitmentDelete(Request $request , $id){
        if (Auth::guard('user')->check()){
            $user = User::find(Auth::guard('user')->id());

            $recruitment = Recruitment::find($id);
            $recruitment->delete();

            $request->session()->flash('success', 'Xóa Thành Công!');
            return back();
        }

        return redirect()->route('get.login.index');
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

            if ($news->save()){
                $request->session()->flash('success', 'Thêm mới thành công!');

                return redirect()->route('get.news_manager.list',$user->id);
            }
            $request->session()->flash('danger', 'Không thể thêm mới');


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

    public function delete(Request $request , $id){
        $data = Post::find($id);
        $data->delete();
        $request->session()->flash('success', 'Xóa thành công!');
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
