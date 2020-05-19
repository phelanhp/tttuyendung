<?php
namespace PPM\Category\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PPM\Category\Entities\RecruiterCategory;
use PPM\User\Entities\UserGroup;


class RecruiterCategoryController extends Controller{
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
        $data = RecruiterCategory::all();
        return view('Category::recruiter_category.list',compact('data'));
    }

    public function getCreate(){
        return view('Category::recruiter_category.create');
    }

    public function postCreate(Request $request){
        $data = new RecruiterCategory($request->all());
        if($data->save()){
            $request->session()->flash('success','Thêm mới thành công!');
            return redirect()->route('recruiter_category.get.list');
        }
        $request->session()->flash('danger','Không thể chỉnh sửa');
        return redirect()->back();
    }

    public function getEdit($id){
        $data = RecruiterCategory::find($id);
        return view('Category::recruiter_category.edit',compact('data'));
    }

    public function postEdit($id, Request $request){
        $data = RecruiterCategory::find($id);
        $data->update($request->all());
        if($data->save()){
            $request->session()->flash('success','Chỉnh sửa thành công!');
            return redirect()->route('recruiter_category.get.list');
        }
        $request->session()->flash('danger','Không thể chỉnh sửa');
        return redirect()->back();
    }
}
