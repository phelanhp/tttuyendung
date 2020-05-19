<?php
namespace PPM\Post\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PPM\Post\Entities\PostCategory;
use PPM\User\Entities\UserGroup;


class PostCategoryController extends Controller{
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
        $data = PostCategory::all();
        return view('Post::post_category.list',compact('data'));
    }

    public function getCreate(){
        return view('Post::post_category.create');
    }

    public function postCreate(Request $request){
        $data = new PostCategory($request->all());
        if($data->save()){
            $request->session()->flash('success','Thêm mới thành công!');
            return redirect()->route('post_category.get.list');
        }
        $request->session()->flash('danger','Không thể chỉnh sửa');
        return redirect()->back();
    }

    public function getEdit($id){
        $data = PostCategory::find($id);
        return view('Post::post_category.edit',compact('data'));
    }

    public function postEdit($id, Request $request){
        $data = PostCategory::find($id);
        $data->update($request->all());
        if($data->save()){
            $request->session()->flash('success','Chỉnh sửa thành công!');
            return redirect()->route('post_category.get.list');
        }
        $request->session()->flash('danger','Không thể chỉnh sửa');
        return redirect()->back();
    }

    public function delete($id){
        $data = PostCategory::find($id);
        $data->delete();
        return redirect()->back();
    }
}
