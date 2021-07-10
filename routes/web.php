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
// Router của Ngọc Anh

Route::prefix('bai-tap-cua-ngoc-anh')->group(function (){
    Route::get('/login',[\App\Http\Controllers\facebook_ngoc_anh_controller::class,'viewLogin']);

    Route::post('/register',[\App\Http\Controllers\facebook_ngoc_anh_controller::class,'viewRegister'])->name('register');
});
// Router của Ngọc Anh
