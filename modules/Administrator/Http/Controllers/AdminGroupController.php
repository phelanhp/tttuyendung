<?php
namespace PPM\Administrator\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PPM\Administrator\Entities\Admin_group;
use PPM\Administrator\Entities\Admin;


class AdminGroupController extends Controller{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Admin_group $admin_group){
        # parent::__construct();
        $this->middleware('auth:administrator');
        $this->admin_group = $admin_group;
    }

    
    public function getIndex(Request $request){
        $data = Admin_group::get();
        return view('Administrator::group.create',compact('data'));
    }

    public function postCreate(Request $request){
        $this->validate($request,$this->admin_group->create_rules,$this->admin_group->create_messages);
        $data = new Admin_group($request->all());
        $data->save();
        $request->session()->flash('success','Thêm mới thành công!');
        return redirect()->back();
    }

    public function getEdit(Request $request,$id){
        $data = Admin_group::get();
        $group = Admin_group::find($id);
        return view('Administrator::group.edit',compact('data','group'));
    }

    public function postEdit(Request $request,$id){
        $this->validate($request,$this->admin_group->edit_rules,$this->admin_group->edit_messages);
        $group = Admin_group::find($id);
        $group->update($request->all());
        $request->session()->flash('success','Chỉnh sửa thành công!');
        return redirect()->back();
    }

    public function getDelete(Request $request, $id){
        $group = Admin_group::find($id);
        $group->delete();
        $request->session()->flash('danger','Đã xóa thành công!');
        return redirect()->back();
    }
}