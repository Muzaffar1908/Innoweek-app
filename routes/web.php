<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mobile\IndexController;
use App\Http\Controllers\Mobile\AuthController;


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

Auth::routes();


Route::group(['prefix' => 'mobile-v'], function () {
    
    Route::controller(IndexController::class)->group(function () {
        Route::get('/', 'home')->name('m-home');
        Route::get('/about', 'about')->name('m-about');
        Route::get('/map', 'map')->name('m-map');
    });

     Route::controller(AuthController::class)->group(function () {
        Route::get('/login', 'LoginPage')->name('m-login');
        Route::post('/login', 'login')->name('m-login-form');
        Route::get('/register', 'RegisterPage')->name('m-register');
        Route::post('/register', 'register')->name('m-register-form');
        Route::get('/verify', 'VerifyPage')->name('m-verify');
        Route::post('/verify', 'VerifMessage')->name('m-verify-form');
    });

    // Route::get('/s', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    //USER
    Route::controller(UserController::class)->group(function () {
        Route::post('user/update/avatar', 'UpdateAvatar');
        Route::get('user/get/{DataID}', 'GetByID');
        Route::put('user/update/info', 'UpdateUserInfo');
        Route::get('user/my/info', 'GetUserInfo');
        Route::delete('user/delete/{DataID}', 'RemoveDataByID');
    });

    // API route for logout user
    Route::post('/logout', [AuthController::class, 'logout']);
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
