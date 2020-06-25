<?php
namespace PPM\Home\Http\Controllers;

use App\Http\Controllers\Controller;
use PPM\Post\Entities\Post;
use Illuminate\Support\Facades\Auth;
use PPM\User\Entities\User;
use PPM\Category\Entities\Student;
use PPM\Category\Entities\Major;
use Illuminate\Http\Request;

class StudentController extends Controller{
	public function getProfileStudent(){
		if (Auth::guard('user')->check()){
            $user = User::find(Auth::guard('user')->id());

            return view('Home::student.profile', compact('user'));
        }

        return redirect()->route('get.login.index');
	}
	public function getEditStudent(){
		if (Auth::guard('user')->check()){
            $user = User::find(Auth::guard('user')->id());
            $majors = Major::get();
            return view('Home::student.edit', compact('user','majors'));
        }

        return redirect()->route('get.login.index');
	}

	public function getActivityStudent(){
		if (Auth::guard('user')->check()){
            $user = User::find(Auth::guard('user')->id());

            return view('Home::student.activity', compact('user'));
        }

        return redirect()->route('get.login.index');
	}


	public function postEditStudent(Request $request){
        if (Auth::guard('user')->check()){
            $user        = User::find(Auth::guard('user')->id());
            $request_user = $request->only(['name','hobby','birth_date','sex','address','email','phone','status']);
            $user->update($request_user);

            if($request->file('avatar')){
                $image = time().'-'.$request->file('avatar')->getClientOriginalName();
                $request->file('avatar')->move('upload/images/users',$image);
                $user->avatar = 'upload/images/users/'.$image;
            }

            $hasher = app('hash');
            if(!empty($request->password) && !empty($request->new_password)){
                if($hasher->check($request->password, $user->password)){
                    $user->password = bcrypt($request->new_password);
                }
            }
            $user->save();


            $student = Student::where('user_id', $user->id)->first();
            $student->course = $request->course;
            $student->major_id =$request->major_id;
            $student->update();

           
            return redirect()->back();

        }
    }

}

?>