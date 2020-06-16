<?php
namespace PPM\Home\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PPM\Category\Entities\Recruiter;
use PPM\User\Entities\User;

class ProfileRecruiterController extends Controller{

    public function getRecruiterProfile(){
        if (Auth::guard('user')->check()){
            $user = User::find(Auth::guard('user')->id());

            return view('Home::recruiter-profile.profile', compact('user'));
        }

        return redirect()->route('get.login.index');
    }

    public function getRecruiterEdit(){
        if (Auth::guard('user')->check()){
            $user = User::find(Auth::guard('user')->id());

            return view('Home::recruiter-profile.edit', compact('user'));
        }

        return redirect()->route('get.login.index');
    }

    public function postRecruiterEdit(Request $request){
        if (Auth::guard('user')->check()){
            $user        = User::find(Auth::guard('user')->id());
            $user->name  = $request->name;
            $user->hobby = $request->hobby;
            $user->update();

            $recruiter = Recruiter::where('user_id', $user->id)->first();
            $request_recruiter = $request->only(['company','address','founding','email','phone']);
            $recruiter->update($request_recruiter);

            return redirect()->back();

        }
    }
}

?>
