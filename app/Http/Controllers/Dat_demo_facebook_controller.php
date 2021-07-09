<?php

namespace App\Http\Controllers;

use App\Models\ArticleModel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class Dat_demo_facebook_controller extends Controller
{
    public function view_login(){
        return view('view_det_ne.login_vs_register');
    }
    public function register(Request $request){
        $user = new UserModel();
        $user->fill($request->all());
        $user->password = Hash::make($request['password']);
        $user->save();
        return $request;
    }
    public function article(){
        return view('view_det_ne.article');
    }
    public function add(Request $request){
        $article = new ArticleModel();
        $article->fill($request->all());
        $article->save();
        return $article;
    }
}
