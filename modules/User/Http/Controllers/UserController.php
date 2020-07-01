<?php

namespace PPM\User\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use phpDocumentor\Reflection\Types\Collection;
use PPM\Category\Entities\Major;
use PPM\Category\Entities\Recruiter;
use PPM\Category\Entities\RecruiterCategory;
use PPM\Category\Entities\Student;
use PPM\User\Entities\UserExcel;
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
        $group = UserGroup::where('key', 'nha-tuyen-dung')->first();
        $data  = User::where('group_id', $group->id)->get();

        return view('User::user.recruiter_list', compact('data'));
    }

    public function getStudentIndex(){
        $group = UserGroup::where('key', 'sinh-vien')->first();
        $data  = User::where('group_id', $group->id)->get();

        return view('User::user.student_list', compact('data'));
    }

    public function getCreate(){
        $recruiter_categories = RecruiterCategory::all();
        $majors               = Major::all();

        return view('User::user.create', compact('recruiter_categories', 'majors'));
    }

    public function postCreate(Request $request){
        $post_user        = $request->only(['group_id', 'name', 'birth_date', 'sex', 'status', 'phone', 'email', 'address', 'identity_card_no', 'username', 'password', 'hobby']);
        $user             = new User($post_user);
        $user->birth_date = ConvertDateTimeToSave($request->birth_date);
        $user->password   = bcrypt($request->password);
        if ($request->file('avatar')){
            $image = slug($request->title) . '-' . $request->file('avatar')
                                                           ->getClientOriginalName();
            $request->file('avatar')->move('upload/images/administrator', $image);
            $user->avatar = 'upload/images/administrator/' . $image;
        }
        if ($user->save()){
            if ($request->group === 'ntd'){
                $post_recruiter     = $request->only(['company', 'founding', 'category_id']);
                $recruiter          = new Recruiter($post_recruiter);
                $recruiter->address = $request->company_address;
                $recruiter->user_id = $user->id;
                $recruiter->save();
            }else{
                $post_student     = $request->only(['code_id', 'class', 'course', 'major_id']);
                $student          = new Student($post_student);
                $student->user_id = $user->id;
                $student->save();
            }

            $request->session()->flash('success', 'Thêm mới thành công!');
            if ($request->group === 'ntd'){
                return redirect()->route('user.get.recruiter_list');
            }

            return redirect()->route('user.get.student_list');
        }
        $request->session()->flash('danger', 'Không thể chỉnh sửa');

        return redirect()->back();
    }

    public function getEdit($id){
        $data                 = User::find($id);
        $recruiter_categories = RecruiterCategory::all();
        $recruiter            = Recruiter::where('user_id', $data->id)->first();
        $majors               = Major::all();
        $student              = Student::where('user_id', $data->id)->first();
        $data->birth_date     = ConvertDateTimeToShow($data->birth_date);

        return view('User::user.edit',
            compact('data', 'recruiter', 'recruiter_categories', 'majors', 'student'));
    }

    public function postEdit($id, Request $request){
        $user = User::find($id);
        $post = $request->only(['group_id', 'name', 'birth_date', 'sex', 'status', 'phone', 'email', 'address', 'identity_card_no', 'username', 'password', 'hobby']);
        if (empty($post['password'])){
            unset($post['password']);
        }else{
            $post['password'] = bcrypt($request->password);
        }
        $post['birth_date'] = ConvertDateTimeToSave($post['birth_date']);
        if ($request->file('avatar')){
            $image = time() . '-' . $request->file('avatar')->getClientOriginalName();
            $request->file('avatar')->move('upload/images/users', $image);
            $user->avatar = 'upload/images/users/' . $image;
        }

        if ($user->update($post)){
            if ($request->group === 'ntd'){
                $post_recruiter     = $request->only(['company', 'founding', 'category_id']);
                $recruiter          = Recruiter::where('user_id', $user->id)->first();
                $recruiter->address = $request->company_address;
                $recruiter->user_id = $user->id;
                $recruiter->update($post_recruiter);
            }else{
                $post_student = $request->only(['code_id', 'class', 'course', 'major_id']);
                $student      = Student::where('user_id', $user->id)->first();
                $student->update($post_student);
            }
            $request->session()->flash('success', 'Thêm mới thành công!');
            if ($request->group === 'ntd'){
                return redirect()->route('user.get.recruiter_list');
            }

            return redirect()->route('user.get.student_list');
        }else{
            $request->session()->flash('danger', 'Không thể chỉnh sửa');

            return redirect()->back();
        }
    }

    /**
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id){
        $data = User::find($id);
        $data->delete();

        return redirect()->back();
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postImport(Request $request){
        $path      = request()->file('excel_file');
        $data_file = Excel::toArray(new UserExcel(), $path);

        $import_data = reset($data_file);

        $data = [];

        foreach ($import_data as $key => $row){
            if ($key == 0){
                continue;
            }
            foreach ($import_data[0] as $key_field => $field){
                if (!empty($field)){
                    $data[$key][$field] = $row[$key_field];
                }
            }
        }
        foreach ($data as $item){
            $item['group_id'] = UserGroup::getGroupId('sinh-vien');
            $item['password'] = bcrypt($item['password']);

            $user = User::where('username', $item['username'])
                        ->where('group_id', $item['group_id'])
                        ->first();
            if (isset($user)){
                $user->password = $item['password'];
                $user->name     = $item['name'];
                $user->sex      = $item['sex'];
                $user->save();
            }else{
                $user = new User($item);
                $user->save();

                $student          = new Student();
                $student->user_id = $user->id;
                $student->code_id = $item['username'];
                $student->save();
            }
        }

        return redirect()->route('user.get.student_list');
    }
}
