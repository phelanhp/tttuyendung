<?php
namespace PPM\Home\Http\Controllers;

use App\Http\Controllers\Controller;
use PPM\Category\Entities\Recruiter;

class RecruiterController extends Controller{

    public function getRecruiterIndex(){
        $recruiters = Recruiter::get();

        return view('Home::recruiter.index', compact('recruiters'));
    }

    public function getRecruiterDetail(){
        return view('Home::recruiter.detail');
    }
}

?>
