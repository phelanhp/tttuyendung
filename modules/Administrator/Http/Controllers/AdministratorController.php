<?php
namespace PPM\Administrator\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PPM\Administrator\Entities\Admin;
use PPM\Administrator\Entities\Admin_group;


class AdministratorController extends Controller{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Admin $admin, Request $request){
        # parent::__construct();
        $this->middleware('auth:admins');
        $this->admin = $admin;
    }

    public function getList(Request $request){
        $data = Admin::get();
        return view('Administrator::administrator.list',compact('data'));
    }

    public function getCreate(Request $request){
        return view('Administrator::administrator.create');
    }

    public function postCreate(Request $request){
        $this->validate($request,$this->admin->create_rules,$this->admin->create_messages);
        $data = new Admin($request->all());
        $data['password'] = bcrypt($request->password);
        if($request->file('avatar')){
            $image = slug($request->title).'-'.$request->file('avatar')->getClientOriginalName();
            $request->file('avatar')->move('upload/images/administrator',$image);
            $data['avatar'] = 'upload/images/administrator/'.$image;
        }
        $data->save();
        $request->session()->flash('success','Thêm mới thành công!');
        return redirect()->route('get.list.admin');
    }

    public function getEdit(Request $request, $id){
        $data = Admin::find($id);
        return view('Administrator::administrator.edit',compact('data'));
    }

    public function postEdit(Request $request, $id){
        $this->validate($request,$this->admin->edit_rules,$this->admin->edit_messages);
        $data = Admin::find($id);
        unset($data['password']);
        $data->update($request->all());
        if($request->file('avatar')){
            $image = slug($request->title).'-'.$request->file('avatar')->getClientOriginalName();
            $request->file('avatar')->move('upload/images/administrator',$image);
            $data->avatar = 'upload/images/administrator/'.$image;
            $data->update();
        }
        $request->session()->flash('success','Chỉnh sửa thành công!');
        return redirect()->back();
    }


    public function getDelete(Request $request, $id){
        $data = Admin::find($id);
        $data->delete();
        $request->session()->flash('danger','Xóa thành công!');
        return redirect()->back();
    }
}
