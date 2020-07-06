<?php

namespace PPM\Home\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PPM\Category\Entities\Major;
use PPM\Category\Entities\Student;
use PPM\Post\Entities\PostComment;
use PPM\Post\Entities\PostLike;
use PPM\User\Entities\User;

class StudentController extends Controller{

    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getProfileStudent($id){
        $user = User::find($id);

        return view('Home::student.profile', compact('user'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function getEditStudent(){
        if (Auth::guard('user')->check()){
            $user   = User::find(Auth::guard('user')->id());
            $majors = Major::get();

            return view('Home::student.edit', compact('user', 'majors'));
        }

        return redirect()->route('get.login.index');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function getActivityStudent(){
        if (Auth::guard('user')->check()){
            $user = User::find(Auth::guard('user')->id());

            $comments = PostComment::with('post', 'user')
                                   ->where('user_id', $user->id)
                                   ->get()
                                   ->toArray();
            $likes    = PostLike::with('post', 'user')
                                ->where('user_id', $user->id)
                                ->get()
                                ->toArray();


            $result = array_merge($comments, $likes);

            $sort_col = [];
            foreach ($result as $key => $item){
                $sort_col[$key] = $item['created_at'];
            }
            array_multisort($sort_col, SORT_ASC, $result);
            $result = collect($result);

            return view('Home::student.activity', compact('user', 'result'));
        }

        return redirect()->route('get.login.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postEditStudent(Request $request){
        if (Auth::guard('user')->check()){
            $user         = User::find(Auth::guard('user')->id());
            $request_user = $request->only(['name', 'hobby', 'birth_date', 'sex', 'address', 'email', 'phone', 'status']);
            $user->update($request_user);

            if ($request->file('avatar')){
                $image = time() . '-' . $request->file('avatar')->getClientOriginalName();
                $request->file('avatar')->move('upload/images/users', $image);
                $user->avatar = 'upload/images/users/' . $image;
            }

            $hasher = app('hash');
            if (!empty($request->password) && !empty($request->new_password)){
                if ($hasher->check($request->password, $user->password)){
                    $user->password = bcrypt($request->new_password);
                }
            }
            $user->save();


            $student               = Student::where('user_id', $user->id)->first();
            $student->course       = $request->course;
            $student->major_id     = $request->major_id;
            $student->achievements = $request->achievements;
            $student->certificate  = $request->certificate;
            $student->experience   = $request->experience;
            $student->update();


            return redirect()->route('get.student.profile');

        }
    }
}

?>
