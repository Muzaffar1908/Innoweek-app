<?php

use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\GaleriesController;

use App\Http\Controllers\InnoweekController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\Mobile\IndexController;
use App\Http\Controllers\SpeakerController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Mobile\AuthController;
use App\Http\Controllers\NewsCategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use App\Models\News\NewsCategory;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\UserTicketController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});


// Frontend  start !!!



// Frontend  stop !!!

Route::group(['prefix' => '/'], function(){
    Route::controller(PageController::class)->group(function(){
        Route::get('/', 'index')->name('index');
    });
});


// Backend  start !!!



Route::prefix('admin')->name('admin.')->group(function(){
    Route::get('/dashboard/', function(){
        return view('admin.layout.index');
    })->name('index');

    Route::resource('/user', UserController::class);
    Route::resource('/news_category', NewsCategoryController::class);
    Route::resource('/news', NewsController::class);
    Route::resource('/galeries', GaleriesController::class);
    Route::resource('/innoweek', InnoweekController::class);
    Route::resource('/archive', ArchiveController::class);
    Route::resource('/conference', ConferenceController::class);
    Route::resource('/speakers', SpeakerController::class);
    Route::resource('/userticket', UserTicketController::class);
    Route::resource('/partner', PartnerController::class);
    Route::POST('/userticket/isactive/{id}',[UserTicketController::class,'is_active']);
    Route::POST('/news/isactive/{id}',[NewsController::class,'is_active']);
    Route::POST('/news_cat/isactive/{id}',[NewsCategoryController::class,'is_active']);
    Route::POST('/archive/isactive/{id}',[ArchiveController::class,'is_active']);
    Route::POST('/conference/isactive/{id}',[ConferenceController::class,'is_active']);
    Route::POST('/user/isactive/{id}',[UserController::class,'is_active']);
    Route::POST('/speaker/isactive/{id}',[SpeakerController::class,'is_active']);
    Route::POST('/speaker/isactive/{id}',[SpeakerController::class,'is_active']);

    Route::POST('/innoweek/isactive/{id}',[InnoweekController::class,'is_active']);


    Route::POST('/galeries/is_active/{id}', [GaleriesController::class, 'is_active']);
    Route::POST('/partner/is_active/{id}', [PartnerController::class, 'is_active']);


});


// Backend  stop !!!


Auth::routes();


// Mobile view start !!!

Route::group(['prefix' => 'mobile-v'], function () {

    Route::controller(IndexController::class)->group(function () {
        Route::get('/', 'home')->name('m-home');
        Route::get('/dashboard', 'dashboard')->name('m-dashboard');
        Route::get('/about', 'about')->name('m-about');
        Route::get('/map', 'map')->name('m-map');
        Route::get('/calendar', 'calendar')->name('m-calendar');
        Route::get('/qrkod', 'qrkod')->name('m-qrkod');
        Route::get('/setting', 'setting')->name('m-setting');
        Route::get('/conferensShow/{id}', 'conferensShow')->name('conferensShow');
        Route::get('/speakerShow/{id}', 'speakerShow')->name('speakerShow');
        Route::get('/newsShow/{id}', 'newsShow')->name('newsShow');
        Route::get('/profile', 'profile')->name('m-profile');
        Route::get('/youtobe-list', 'youtobe_list')->name('m-youtobe_list');
        Route::get('/youtobe/{id}', 'youtobe')->name('m-youtobe');
        Route::post('/profile/update/{id}', [UserController::class, 'profileUpdate']);
        Route::get('/isregqr/{id}', 'isregqr')->name('isregqr');
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
});
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Mobile view stop !!!

