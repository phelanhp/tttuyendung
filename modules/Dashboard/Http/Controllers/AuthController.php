<?php
namespace PPM\Dashboard\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Admin;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(){
        # parent::__construct();
    }
    public function getLogin(Request $request){
        if(Auth::guard('admins')->check()){
            return redirect()->back();
        }else{
            return view('Dashboard::backend.auth.login');
        }
    }


    public function postLogin(Request $request){
        $login = [
                    'username' => $request->input('username'),
                    'password' => $request->input('password')
                ];

        if(Auth::guard('admins')->attempt($login, $request->has('remember'))){
            return redirect()->route('get.index.dashboard');
        }else{
            $request->session()->flash('danger','Sai tên đăng nhập hoặc mật khẩu!');
            return redirect()->back();
        }
    }

    public function getLogout(Request $request)
    {
        Auth::guard('admins')->logout();
        return redirect()->route('login');
    }
}