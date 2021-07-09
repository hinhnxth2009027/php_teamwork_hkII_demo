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

Route::get('/', function () {
    return view('welcome');
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
