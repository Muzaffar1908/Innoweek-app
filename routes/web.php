<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EduHubController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\AdminController;


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
Route::get("/admin/qadam/edit/{id}", [AdminController::class, "steps_edit"]);
Route::post("/admin/qadam/save", [AdminController::class, "steps_save"]);
Route::get("/admin/qadam/add", [AdminController::class, "steps_add"]);
Route::get("/admin/qadam", [AdminController::class, "steps"]);
Route::get("/admin/nega/dell/{id}", [AdminController::class, "nega_dell"]);
Route::post("/admin/nega/update/{id}", [AdminController::class, "nega_updete"]);
Route::get("/admin/nega/edit/{id}", [AdminController::class, "nega_edit"]);
Route::post("/admin/nega/save", [AdminController::class, "nega_save"]);
Route::get("/admin/nega/add", [AdminController::class, "nega_add"]);
Route::get("/admin/negaEduHub", [AdminController::class, "nega"]);
Route::get("/admin/category/edit/{id}", [AdminController::class, "category_edit"]);
Route::post("/admin/category/update/{id}", [AdminController::class, "category_update"]);
Route::get("/admin/category/edit/{id}", [AdminController::class, "category_edit"]);
Route::get("/admin/category/dell/{id}", [AdminController::class, "category_dell"]);
Route::post("/admin/category/save", [AdminController::class, "category_save"]);
Route::get("/admin/category/add", [AdminController::class, "category_add"]);
Route::get("/admin/category", [AdminController::class, "category"]);
Route::get("/admin/eduhub/dell/{id}", [AdminController::class, "eduhub_dell"]);
Route::get("/admin/eduhub/update/{id}", [AdminController::class, "eduhub_update"]);
Route::get("/admin/eduhub/edit/{id}", [AdminController::class, "eduhub_edit"]);
Route::get("/admin/eduhub/addsave", [AdminController::class, "eduhub_addsave"]);
Route::get("/admin/eduhub/add", [AdminController::class, "eduhub_add"]);
Route::get("/admin", [AdminController::class, "index"]);
Route::get("/adminpanel", [AdminController::class, "index"]);
Route::get("/admin/eduhub", [AdminController::class, "index"]);








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
Route::get("/home", [EduHubController::class, "index"]);

Route::get('/', function () {
    return view('/index');
});

Auth::routes();

