<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class facebook_ngoc_anh_controller extends Controller
{
    public function viewLogin(){
        return view('demo-facebook.login_and_register');
    }

    public function viewRegister(Request $request){
        return $request;
    }
}
