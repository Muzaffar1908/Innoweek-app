<?php

use App\Http\Controllers\ArchiveController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mobile\IndexController;
use App\Http\Controllers\Mobile\AuthController;
use App\Http\Controllers\NewsCategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\UserController;
use App\Models\News\NewsCategory;

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

Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/dashboard', function(){
        return view('admin.layout.app');
    });

    Route::resource('/user', UserController::class);
    Route::resource('/news_category', NewsCategoryController::class);
    Route::resource('/news', NewsController::class);
    Route::resource('/archive', ArchiveController::class);
});

Auth::routes();


Route::group(['prefix' => 'mobile-v'], function () {
    
    Route::controller(IndexController::class)->group(function () {
        Route::get('/', 'home')->name('m-home');
        Route::get('/dashboard', 'dashboard')->name('m-dashboard');
        Route::get('/about', 'about')->name('m-about');
        Route::get('/map', 'map')->name('m-map');
        Route::get('/calendar', 'calendar')->name('m-calendar');
        Route::get('/qrkod', 'qrkod')->name('m-qrkod');
        Route::get('/setting', 'setting')->name('m-setting');
        Route::get('/news-1', 'news1')->name('m-news1');
        Route::get('/news-2', 'news2')->name('m-news2');
        Route::get('/news-3', 'news3')->name('m-news3');
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
