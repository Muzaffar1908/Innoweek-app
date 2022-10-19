<?php

use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\Employee\Users\UserController as UsersUserController;
use App\Http\Controllers\Front\AuthController as FrontAuthController;
use App\Http\Controllers\Front\CheckController;
use App\Http\Controllers\GaleriesController;

use App\Http\Controllers\InnoweekController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Live360Controller;
use App\Http\Controllers\Mobile\IndexController;
use App\Http\Controllers\SpeakerController;
use App\Http\Controllers\LiveStatisticController;
use App\Http\Controllers\PushNotificationController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Mobile\AuthController;
use App\Http\Controllers\NewsCategoryController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\Promo2Controller;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
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

Route::get('/info/privacy', function () {
    return view('private');
});

Route::get('/statistic', function () {
    return view('frontend.statistic');
});

Route::get('/online/registration', function () {
    return view('frontend.register');
});

Route::get('/ticket', function () {
    return view('frontend.ticket');
});

Route::get('/live360', function () {
    return view('frontend.pavilion');
});

Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});


// Frontend  start !!!
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/mobile-v-logout', [IndexController::class, 'SignOut'])->name('m-logout');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/check/ticket/{dataID}', [CheckController::class, 'checkScan'])->name('d-checker-code');
Route::get('/ticket/checker', [CheckController::class, 'index'])->name('d-checker');
Route::post('/ticket/checker', [CheckController::class, 'checkTicket'])->name('d-checker-form');
Route::get('/ticket/download', [CheckController::class, 'ticketDownload'])->name('d-checker-download');

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    // Route::get('/index', 'Index')->name('indexx');
    Route::get('/newsshow/{id}', 'newsshow')->name('newsshowx');
    Route::get('/eventshow/{id}', 'eventShow')->name('eventshowx');
    Route::get('/speakershow/{id}', 'speakerShow')->name('speakershowx');
    Route::get('/speakers', 'speakers')->name('speakersx');
    Route::get('/code', 'register')->name('code');
    Route::get('/events', 'events')->name('eventsx');
    Route::get('/news', 'news')->name('newsx');
    Route::get('/statistic', 'live_statistic')->name('live_statistics');
    Route::get('/live360', 'live360')->name('live360s');
});

Route::controller(FrontAuthController::class)->group(function () {
    Route::post('/ticket/register', 'register')->name('d-register');
    Route::get('/ticket/verify', 'VerifyPage')->name('d-verify');
    Route::post('/ticket/verify', 'VerifyMessage')->name('d-verified');
    Route::get('/ticket/login', 'LoginPage')->name('d-login');
    Route::get('/ticket', 'TicketPage')->name('d-ticket');
});

//middleware('auth', 'isUser') shuni  Qo'shasiz bo'ldi//
// Route::prefix('employee')->name('emp.')->middleware('auth', 'isUser')->group(function () {
//    Route::get('/users', [UsersUserController::class, 'index'])->name('user.view');
//    Route::resource('/user', UsersUserController::class);
// });


// Backend  start !!!
Route::prefix('admin')->name('admin.')->middleware('auth', 'isAdmin')->group(function () {
    // Route::get('/dashboard/', function () {
    //     return view('admin.layout.index');
    // })->name('index');

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
    Route::resource('/promo', PromoController::class);
    Route::resource('/promo2', Promo2Controller::class);
    Route::resource('/live_statistic', LiveStatisticController::class);
    Route::resource('/push_notification', PushNotificationController::class);
    Route::resource('/live360', Live360Controller::class);
    Route::POST('/userticket/isactive/{id}', [UserTicketController::class, 'is_active']);
    Route::POST('/news/isactive/{id}', [NewsController::class, 'is_active']);
    Route::POST('/news_cat/isactive/{id}', [NewsCategoryController::class, 'is_active']);
    Route::POST('/archive/isactive/{id}', [ArchiveController::class, 'is_active']);
    Route::POST('/conference/isactive/{id}', [ConferenceController::class, 'is_active']);
    Route::POST('/user/isactive/{id}', [UserController::class, 'is_active']);
    Route::POST('/speaker/isactive/{id}', [SpeakerController::class, 'is_active']);
    Route::POST('/speaker/isactive/{id}', [SpeakerController::class, 'is_active']);
    Route::POST('/innoweek/isactive/{id}', [InnoweekController::class, 'is_active']);
    Route::POST('/galeries/is_active/{id}', [GaleriesController::class, 'is_active']);
    Route::POST('/partner/is_active/{id}', [PartnerController::class, 'is_active']);
    Route::POST('/promo/is_active/{id}', [PromoController::class, 'is_active']);
    Route::POST('/promo2/is_active/{id}', [Promo2Controller::class, 'is_active']);
    Route::POST('/push_notification/is_active/{id}', [PushNotificationController::class, 'is_active']);
    Route::POST('/live360/isactive/{id}', [Live360Controller::class, 'is_active']);
});

// Backend  stop !!!
// Auth::routes();
// Mobile view start !!!
Route::group(['prefix' => 'mobile-v'], function () {
    Route::controller(IndexController::class)->group(function () {
        Route::get('/', 'home')->name('m-home');
        Route::get('/dashboard', 'dashboard')->name('m-dashboard');
        Route::get('/about', 'about')->name('m-about');
        Route::get('/map', 'map')->name('m-map');
        Route::get('/live360', 'live360')->name('m-live360');
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

    //USER
    Route::controller(UserController::class)->group(function () {
        Route::post('user/update/avatar', 'UpdateAvatar');
        Route::get('user/get/{DataID}', 'GetByID');
        Route::put('user/update/info', 'UpdateUserInfo');
        Route::get('user/my/info', 'GetUserInfo');
        Route::delete('user/delete/{DataID}', 'RemoveDataByID');
    });
});
