<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//routers của cường


Route::prefix('adminn')->group(function (){
    Route::get('/hello',[\App\Http\Controllers\cuong_demo_controller::class,'viewindex'])->name('hello');
    Route::get('/aboutus',[\App\Http\Controllers\cuong_demo_controller::class,'viewaboutus'])->name('aboutus');
    Route::get('/contact',[\App\Http\Controllers\cuong_demo_controller::class,'viewcontact'])->name('contact');
    Route::post('/hello',[\App\Http\Controllers\cuong_demo_controller::class,'viewpost'])->name('hellopost');

    Route::get('/updateproduct/{id}',[\App\Http\Controllers\cuong_demo_controller::class,'update_product'])->name('update_product');

    Route::post('/addproduct',[\App\Http\Controllers\cuong_demo_controller::class,'add_product'])->name('add_product');
});

//router cua det
Route::prefix('admin')->group(function (){
    Route::get('/index',[\App\Http\Controllers\dat_demo_controller::class,'viewindex'])->name('index');
    Route::get('/about',[\App\Http\Controllers\dat_demo_controller::class, 'datnehihi'])->name('about');
    Route::get('/contact',[\App\Http\Controllers\dat_demo_controller::class, 'dat'])->name('contact');
    Route::post('/input',[\App\Http\Controllers\dat_demo_controller::class,'action'])->name('inputform');
});
//router cua det
Route::prefix('bai_tap_cua_det')->group(function (){
    Route::get('/login',[\App\Http\Controllers\Dat_demo_facebook_controller::class,'view_login'])->name('view_login');


    Route::post('/register',[\App\Http\Controllers\Dat_demo_facebook_controller::class, 'register'])->name('register');
    Route::get('/article',[\App\Http\Controllers\Dat_demo_facebook_controller::class,'article'])->name('article');
    Route::post('/article',[\App\Http\Controllers\Dat_demo_facebook_controller::class,'add'])->name('add');
});


Route::prefix('baitapcuacuong')->group(function (){
    Route::get('/login',[\App\Http\Controllers\cuong_demo_facebook_controler::class,'vew_login'])->name('view_login');

    Route::post('/register',[\App\Http\Controllers\cuong_demo_facebook_controler::class,'register'])->name('register');

    Route::post('/articlepost',[\App\Http\Controllers\cuong_demo_facebook_controler::class,'articlepost'])->name('article_post');
    Route::get('/articleget',[\App\Http\Controllers\cuong_demo_facebook_controler::class,'articleget'])->name('article_get');

});
//routers của cường
