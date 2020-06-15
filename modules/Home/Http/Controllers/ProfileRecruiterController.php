<?php
namespace PPM\Home\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use PPM\Post\Entities\Post;
use PPM\User\Entities\User;

class ProfileRecruiterController extends Controller{
	public function getRecruiterProfile(){
	    if(Auth::guard('user')->check()){
            $user = User::find(Auth::guard('user')->id());
            return view('Home::recruiter-profile.profile', compact('user'));
        }
        return redirect()->route('get.login.index');
	}
	public function getRecruiterEdit(){
        if(Auth::guard('user')->check()){
            $user = User::find(Auth::guard('user')->id());
            return view('Home::recruiter-profile.edit',compact('user'));
        }
        return redirect()->route('get.login.index');
	}
}

 ?>
