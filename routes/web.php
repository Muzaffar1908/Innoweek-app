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


Route::post("/user/update/{id}", [EduHubController::class, "user_update"]);
Route::get("/user/edit/{id}",[EduHubController::class,'user_profil']);


Route::post("/admin/admin/update/{id}", [AdminController::class, "admin_update"]);
Route::get("/admin/admin/{id}", [AdminController::class, "admin"]);
Route::post("/admin/admin/save", [AdminController::class, "admin_save"]);
Route::get("/admin/admins/add", [AdminController::class, "admin_add"]);


Route::get("/admin/jamoa/dell/{id}", [AdminController::class, "jamoa_dell"]);
Route::post("/admin/jamoa/update/{id}", [AdminController::class, "jamoa_update"]);
Route::get("/admin/jamoa/edit/{id}", [AdminController::class, "jamoa_edit"]);
Route::post("/admin/jamoa/save", [AdminController::class, "jamoa_save"]);
Route::get("/admin/jamoa/add", [AdminController::class, "jamoa_add"]);
Route::get("/admin/jamoa", [AdminController::class, "jamoa"]);


Route::get("/admin/about_b/dell/{id}", [AdminController::class, "about_b_dell"]);
Route::post("/admin/about_b/update/{id}", [AdminController::class, "about_b_update"]);
Route::get("/admin/about_b/edit/{id}", [AdminController::class, "about_b_edit"]);
Route::post("/admin/about_b/save", [AdminController::class, "about_b_save"]);
Route::get("/admin/about_b/add", [AdminController::class, "about_b_add"]);


Route::get("/admin/about/dell/{id}", [AdminController::class, "about_dell"]);
Route::post("/admin/about/update/{id}", [AdminController::class, "about_update"]);
Route::get("/admin/about/edit/{id}", [AdminController::class, "about_edit"]);
Route::post("/admin/about/save", [AdminController::class, "about_save"]);
Route::get("/admin/about/add", [AdminController::class, "about_add"]);
Route::get("/admin/about", [AdminController::class, "about"]);




Route::get("/admin/services/dell/{id}", [AdminController::class, "services_dell"]);
Route::post("/admin/services/update/{id}", [AdminController::class, "services_update"]);
Route::get("/admin/services/edit/{id}", [AdminController::class, "services_edit"]);
Route::post("/admin/services/save", [AdminController::class, "services_save"]);
Route::get("/admin/services/add", [AdminController::class, "services_add"]);
Route::get("/admin/services", [AdminController::class, "services"]);


Route::get("/admin/policy/dell/{id}", [AdminController::class, "policy_dell"]);
Route::post("/admin/policy/update/{id}", [AdminController::class, "policy_update"]);
Route::get("/admin/policy/edit/{id}", [AdminController::class, "policy_edit"]);
Route::post("/admin/policy/save", [AdminController::class, "policy_save"]);
Route::get("/admin/policy/add", [AdminController::class, "policy_add"]);
Route::get("/admin/policy", [AdminController::class, "policy"]);
Route::get("/admin/qadam/dell/{id}", [AdminController::class, "qadam_dell"]);
Route::post("/admin/qadam/update/{id}", [AdminController::class, "qadam_update"]);
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
Route::get("/course-single/", [EduHubController::class, "course_single"]);
Route::get("/signup", [EduHubController::class, "signup"]);
Route::get("/forgotPassword", [EduHubController::class, "forgotPassword"]);
Route::get("/signin", [EduHubController::class, "signin"]);
Route::get("/card", [EduHubController::class, "card"]);
Route::get("/card-checkout", [EduHubController::class, "card_checkout"]);
Route::get("/contact", [EduHubController::class, "contact"]);
Route::get("/blog", [EduHubController::class, "blog"]);
Route::get("/instructor-single/{id}", [EduHubController::class, "instructor_single"]);
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

