<?php
namespace PPM\Home\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class LoginController extends Controller{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(){
        # parent::__construct();
        // $this->middleware('auth');
    }
    public function login(Request $request){
        return view('Sample::index');
    }
}