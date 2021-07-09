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


//router của hjnh

Route::prefix('bai-tap-cua-hjnh')->group(function (){
    Route::get('/login',[\App\Http\Controllers\Hjnh_demo_faceook_controller::class,'view_login'])->name('view_login');

    Route::post('/register',[\App\Http\Controllers\Hjnh_demo_faceook_controller::class,'register'])->name('register');
});

//router của hjnh
