<?php
namespace PPM\User\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PPM\Category\Entities\Major;
use PPM\Category\Entities\Recruiter;
use PPM\Category\Entities\RecruiterCategory;
use PPM\Category\Entities\Student;
use PPM\User\Entities\UserGroup;
use PPM\User\Entities\User;


class UserController extends Controller{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(){
        # parent::__construct();
        $this->middleware('auth:admins');
    }

    public function getRecruiterIndex(){
        $data = User::where('group_id','1')->get();
        return view('User::user.recruiter_list',compact('data'));
    }

    public function getStudentIndex(){
        $data = User::where('group_id','2')->get();
        return view('User::user.student_list',compact('data'));
    }

    public function getCreate(){
        $recruiter_categories = RecruiterCategory::all();
        $majors = Major::all();
        return view('User::user.create',compact('recruiter_categories','majors'));
    }

    public function postCreate(Request $request){
        $post_user = $request->only(['group_id','name','birth_date','sex','status','phone','email','address','identity_card_no','username','password','hobby']);
        $user = new User($post_user);
        $user->birth_date = ConvertDateTimeToSave($request->birth_date);
        $user->password = bcrypt($request->password);
        if($request->file('avatar')){
            $image = slug($request->title).'-'.$request->file('avatar')->getClientOriginalName();
            $request->file('avatar')->move('upload/images/administrator',$image);
            $user->avatar = 'upload/images/administrator/'.$image;
        }
        if($user->save()){
            if($request->group === 'ntd'){
                $post_recruiter = $request->only(['company','founding','category_id']);
                $recruiter = new Recruiter($post_recruiter);
                $recruiter->address = $request->company_address;
                $recruiter->user_id = $user->id;
                $recruiter->save();
            }else{
                $post_student = $request->only(['code_id','class','course','major_id']);
                $student = new Student($post_student);
                $student->user_id = $user->id;
                $student->save();
            }

            $request->session()->flash('success','Thêm mới thành công!');
            if($request->group === 'ntd'){
                return redirect()->route('user.get.recruiter_list');
            }
            return redirect()->route('user.get.student_list');
        }
        $request->session()->flash('danger','Không thể chỉnh sửa');
        return redirect()->back();
    }

    public function getEdit($id){
        $data = User::find($id);
        $recruiter_categories = RecruiterCategory::all();
        $recruiter = Recruiter::where('user_id',$data->id)->first();
        $majors = Major::all();
        $student = Student::where('user_id',$data->id)->first();
        $data->birth_date = ConvertDateTimeToShow($data->birth_date);
        return view('User::user.edit',compact('data','recruiter','recruiter_categories','majors','student'));
    }

    public function postEdit($id, Request $request){
        $user = User::find($id);
        $post = $request->only(['group_id','name','birth_date','sex','status','phone','email','address','identity_card_no','username','password','hobby']);
        if(empty($post['password'])){
            unset($post['password']);
        }else{
            $user->password = bcrypt($request->password);
        }
        $post['birth_date'] = ConvertDateTimeToSave($post['birth_date']);
        if($request->file('avatar')){
            $image = time().'-'.$request->file('avatar')->getClientOriginalName();
            $request->file('avatar')->move('upload/images/users',$image);
            $user->avatar = 'upload/images/users/'.$image;
        }
        if($user->update($post)){
            if($request->group === 'ntd'){
                $post_recruiter = $request->only(['company','founding','category_id']);
                $recruiter = Recruiter::where('user_id',$user->id)->first();
                $recruiter->address = $request->company_address;
                $recruiter->user_id = $user->id;
                $recruiter->update($post_recruiter);
            }else{
                $post_student = $request->only(['code_id','class','course','major_id']);
                $student = Student::where('user_id',$user->id)->first();
                $student->update($post_student);
            }
            $request->session()->flash('success','Thêm mới thành công!');
            if($request->group === 'ntd'){
                return redirect()->route('user.get.recruiter_list');
            }
            return redirect()->route('user.get.student_list');
        }else{
            $request->session()->flash('danger','Không thể chỉnh sửa');
            return redirect()->back();
        }
    }

    public function delete($id){
        $data = User::find($id);
        $data->delete();
        return redirect()->back();
    }
}
