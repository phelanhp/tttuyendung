<?php
namespace PPM\User\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PPM\User\Entities\UserGroup;


class UserGroupController extends Controller{
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
        $data = UserGroup::all();
        return view('User::user_group.list',compact('data'));
    }

    public function getCreate(){
        return view('User::user_group.create');
    }

    public function postCreate(Request $request){
        $data = new UserGroup($request->all());
        if($data->save()){
            $request->session()->flash('success','Thêm mới thành công!');
            return redirect()->route('user_group.get.list');
        }
        $request->session()->flash('danger','Không thể chỉnh sửa');
        return redirect()->back();
    }

    public function getEdit($id){
        $data = UserGroup::find($id);
        return view('User::user_group.edit',compact('data'));
    }

    public function postEdit($id, Request $request){
        $data = UserGroup::find($id);
        $data->update($request->all());
        if($data->save()){
            $request->session()->flash('success','Chỉnh sửa thành công!');
            return redirect()->route('user_group.get.list');
        }
        $request->session()->flash('danger','Không thể chỉnh sửa');
        return redirect()->back();
    }
}
