<?php
namespace PPM\Category\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PPM\Category\Entities\Major;
use PPM\User\Entities\UserGroup;


class MajorController extends Controller{
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
        $data = Major::all();
        return view('Category::major.list',compact('data'));
    }

    public function getCreate(){
        return view('Category::major.create');
    }

    public function postCreate(Request $request){
        $data = new Major($request->all());
        if($data->save()){
            $request->session()->flash('success','Thêm mới thành công!');
            return redirect()->route('major.get.list');
        }
        $request->session()->flash('danger','Không thể chỉnh sửa');
        return redirect()->back();
    }

    public function getEdit($id){
        $data = Major::find($id);
        return view('Category::major.edit',compact('data'));
    }

    public function postEdit($id, Request $request){
        $data = Major::find($id);
        $data->update($request->all());
        if($data->save()){
            $request->session()->flash('success','Chỉnh sửa thành công!');
            return redirect()->route('major.get.list');
        }
        $request->session()->flash('danger','Không thể chỉnh sửa');
        return redirect()->back();
    }

    public function delete($id){
        $data = Major::find($id);
        $data->delete();
        return redirect()->back();
    }
}
