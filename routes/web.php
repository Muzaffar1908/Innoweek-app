<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EduHubController;
use Illuminate\Support\Facades\App;

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
Route::get("eduhub/{lang}", function($lang) {
    App::setLocale($lang);
    session()->put('lang', $lang);
    return redirect()->back();
});
Route::view("/eduhub","eduhub");
Route::get("/course-category", [EduHubController::class, "course_category"]);
Route::get("/course-search", [EduHubController::class, "course_search"]);
Route::get("/course-single", [EduHubController::class, "course_single"]);
Route::get("/signup", [EduHubController::class, "signup"]);
Route::get("/forgotPassword", [EduHubController::class, "forgotPassword"]);
Route::get("/signin", [EduHubController::class, "signin"]);
Route::get("/card", [EduHubController::class, "card"]);
Route::get("/card-checkout", [EduHubController::class, "card_checkout"]);
Route::get("/contact", [EduHubController::class, "contact"]);
Route::get("/blog", [EduHubController::class, "blog"]);
Route::get("/instructor-single", [EduHubController::class, "instructor_single"]);
Route::get("/instructor", [EduHubController::class, "instructor"]);
Route::get("/courses", [EduHubController::class, "courses"]);
Route::get("/about", [EduHubController::class, "about"]);
Route::get("/teams", [EduHubController::class, "teams"]);
Route::get("/police", [EduHubController::class, "police"]);
Route::get("/", [EduHubController::class, "index"]);
Route::get("/eduhub", [EduHubController::class, "index"]);
Route::get('/', function () {
    return view('/index');
});
