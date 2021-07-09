<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dat_demo_controller extends Controller
{
    //
    public function viewindex(){
        return view('view_det_ne.index');
    }
    public function datnehihi(){
        return view('view_det_ne.about');
    }
    public function dat(){
        return view('view_det_ne.contact');
    }
    public function action(){
        return view('view_det_ne.indexhtml');
    }

}
