<?php

namespace PPM\Home\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller{

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function getLogin(Request $request){
        if(Auth::guard('user')->check()){
            return redirect()->back();
        }else{
            return view('Home::login.index');
        }
    }

    public function postLogin(Request $request){
        $login = [
            'username' => $request->input('username'),
            'password' => $request->input('password')
        ];

        if(Auth::guard('user')->attempt($login, $request->has('remember'))){
            return redirect()->route('get.home.index');
        }else{
            $request->session()->flash('danger','Sai tên đăng nhập hoặc mật khẩu!');
            return redirect()->back();
        }
    }

    public function logout(Request $request) {
        Auth::guard('user')->logout();
        return redirect()->back();
    }
}
