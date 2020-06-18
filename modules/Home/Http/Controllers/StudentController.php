<?php
namespace PPM\Home\Http\Controllers;

use App\Http\Controllers\Controller;
use PPM\Post\Entities\Post;
use Illuminate\Support\Facades\Auth;
use PPM\User\Entities\User;
use PPM\Category\Entities\Student;

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

            return view('Home::student.edit', compact('user'));
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
            $user->name  = $request->name;
            $user->hobby = $request->hobby;
            $user->update();

            $student = Student::where('user_id', $user->id)->first();
            $request_student = $request->only(['birth_date','sex','address','course','email','phone']);
            $student->update($request_student);

            return redirect()->back();

        }
    }

}

?>