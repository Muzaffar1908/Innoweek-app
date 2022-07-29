<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\User_link;
use App\Models\Cources;
use App\Models\Student_buy_course;
use App\Models\Courses_sharxlar;
use App\Models\Instructor_about;
use Illuminate\Support\Facades\DB;
use App\Models\Instructor_sharxlar;
use Illuminate\Support\Facades\Hash;
use App\Models\Instructor_education;
use App\Models\Instructor_tajriba;
use App\Models\Cources_includes;
use App\Models\Category;
use App\Models\Video_tip;
use App\Models\Cources_discription;
use App\Models\Eduhub;
use App\Models\Eduhub_header_en;
use App\Models\Eduhub_header_uz;
use App\Models\Eduhub_header_ru;
use App\Models\Student_cards_courses;
use Auth;
use Response;
use Illuminate\Database\Eloquent\Builder;

class EduHubController extends Controller
{
/**
 * student profil
 */



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request)
    {
        $t = app()->getLocale('lang');
        $eduhub=Eduhub::orderBy('id', 'desc')->first();
        $header=DB::select('select * from eduhub_header_' . $t . 's order by id Desc limit 1 ' );
        $category=DB::select('select * from category_' . $t . 's order by name' );
        $nega=DB::select('select * from eduhub_nega_' . $t . 's order by id Desc limit 4 ' );
        $qadam=DB::select('select * from eduhub_steps_' . $t . 's order by id Desc limit 1 ' );

        $cources = Cources::select('*')->orderBy('name')->withCount('students')->withCount('sharxlar')->withAvg('sharxlar', 'reyting')->paginate(6);

        if($request->ajax()){
            $view=view('data', compact('cources'))->render();
            return response()->json(['html'=>$view]);
        }

        $teacher=User::where('uroven','=','teacher')->orderBy("name")->withCount('students')->withCount('ins_sharx')->withCount('cources')->withAvg('ins_sharx', 'reyting')->paginate(4);
        return view("index",['head'=>$header,'category'=>$category,'nega'=>$nega,'steps'=>$qadam,'eduhub'=>$eduhub,
        'cources'=>$cources,'teacher'=>$teacher
        ]);
    }
    public function about()
    {
        $t = app()->getLocale('lang');
        $eduhub=Eduhub::orderBy('id', 'desc')->first();
       $category=DB::select('select * from category_' . $t . 's order by name' );

        return view("pages.about", ['category'=>$category,'eduhub'=>$eduhub]);
    }
    public function courses()
    {
        $t = app()->getLocale('lang');
        $eduhub=Eduhub::orderBy('id', 'desc')->first();
       $category=DB::select('select * from category_' . $t . 's order by name' );

        return view("course.course");
    }

    public function course_search()
    {
        $t = app()->getLocale('lang');
        $eduhub=Eduhub::orderBy('id', 'desc')->first();
       $category=DB::select('select * from category_' . $t . 's order by name' );

        return view("course.course_search");
    }
    public function course_category()
    {
        $t = app()->getLocale('lang');
        $eduhub=Eduhub::orderBy('id', 'desc')->first();
       $category=DB::select('select * from category_' . $t . 's order by name' );

        return view("course.course_category", ['category'=>$category,'eduhub'=>$eduhub]);
    }
    public function instructor()
    {
        $t = app()->getLocale('lang');
        $eduhub=Eduhub::orderBy('id', 'desc')->first();
       $category=DB::select('select * from category_' . $t . 's order by name' );

        return view("inctructor.instructor", ['category'=>$category,'eduhub'=>$eduhub]);
    }

    public function teams()
    {
        $t = app()->getLocale('lang');
        $eduhub=Eduhub::orderBy('id', 'desc')->first();
       $category=DB::select('select * from category_' . $t . 's order by name' );

        return view("pages.teams", ['category'=>$category,'eduhub'=>$eduhub]);
    }
    public function police()
    {
        $t = app()->getLocale('lang');
        $eduhub=Eduhub::orderBy('id', 'desc')->first();
       $category=DB::select('select * from category_' . $t . 's order by name' );

        return view("pages.police", ['category'=>$category,'eduhub'=>$eduhub]);
    }
    public function blog()
    {
        $t = app()->getLocale('lang');
        $eduhub=Eduhub::orderBy('id', 'desc')->first();
       $category=DB::select('select * from category_' . $t . 's order by name' );

        return view("blog.blog", ['category'=>$category,'eduhub'=>$eduhub]);
    }
    public function contact()
    {
        $t = app()->getLocale('lang');
        $eduhub=Eduhub::orderBy('id', 'desc')->first();
       $category=DB::select('select * from category_' . $t . 's order by name' );

        return view("pages.contact", ['category'=>$category,'eduhub'=>$eduhub]);
    }
    public function card()
    {
        $t = app()->getLocale('lang');
        $eduhub=Eduhub::orderBy('id', 'desc')->first();
       $category=DB::select('select * from category_' . $t . 's order by name' );

        return view("korzinka.card", ['category'=>$category,'eduhub'=>$eduhub]);
    }
    public function card_add($id, $auth)
    {
        $buy=Student_cards_courses::where('user_id', '=', $auth)->where('cours_id', '=', $id)->first();
        if($buy==null){
            $card=new Student_cards_courses;
            $card->cours_id=$id;
            $card->user_id=$auth;
            $card->save();
            return redirect()->back()->with('success', 'Add new cource Card.');
        }else{
            return redirect()->back()->with('success', 'This is available on the course card.');
        }

    }
    public function card_checkout()
    {
        $t = app()->getLocale('lang');
        $eduhub=Eduhub::orderBy('id', 'desc')->first();
       $category=DB::select('select * from category_' . $t . 's order by name' );

        return view("korzinka.card_checkout", ['category'=>$category,'eduhub'=>$eduhub]);
    }
    public function signin()
    {

        $t = app()->getLocale('lang');
        $eduhub=Eduhub::orderBy('id', 'desc')->first();
       $category=DB::select('select * from category_' . $t . 's order by name' );

        return view("sign.sign-in",['category'=>$category,'eduhub'=>$eduhub]);
    }
    public function forgotPassword()
    {

        $t = app()->getLocale('lang');
        $eduhub=Eduhub::orderBy('id', 'desc')->first();
       $category=DB::select('select * from category_' . $t . 's order by name' );

        return view("sign.forget-password", ['category'=>$category,'eduhub'=>$eduhub]);
    }
    public function signup()

    {
        $t = app()->getLocale('lang');
        $eduhub=Eduhub::orderBy('id', 'desc')->first();
       $category=DB::select('select * from category_' . $t . 's order by name' );
        return view("sign.sign-up",['category'=>$category,'eduhub'=>$eduhub]);
    }


    public function student_single($id, $id2)
    {
        $t = app()->getLocale('lang');
        $eduhub=Eduhub::orderBy('id', 'desc')->first();
       $category=DB::select('select * from category_' . $t . 's order by name' );
        $edit=0;
        if(($id==$id2)){
            $edit=1;
        }

        $user = User::withCount('cources')->findOrFail($id);
        $course=Student_buy_course::where('user_id','=',$id)->withAvg('sharx','reyting')->withAvg('sharx','reyting')->withCount('lesson')->withAvg('sharx','reyting')->withCount('watch')->withCount('sharx')->withCount('lesson')->get();

        return view("student.student_profil", ['user'=>$user,'edit'=>$edit,'cources'=>$course, 'category'=>$category,'eduhub'=>$eduhub ]);
    }

    /**
     * course_single
     */


    public function cource_sharx(Request $request, $id,)
    {
        $data = $request->validate([
            'reviewRating' => 'in:1,,2,3,4,5|required',
            'text' => 'required',
            'cource_id' => 'required'
        ]);

        $n = new Courses_sharxlar();
        $n->reyting = $data['reviewRating'];
        $n->user_id = $id;
        $n->cours_id = $data['cource_id'];
        $n->sharx = $data['text'];
        $n->save();
        return redirect('/course-single/' . $data['cource_id']);
    }

    public function course_single($id)
    {
        $t = app()->getLocale('lang');
        $eduhub=Eduhub::orderBy('id', 'desc')->first();
       $category=DB::select('select * from category_' . $t . 's order by name' );
        $course = Cources::select('*')->withCount('students')->withCount('video')->withCount('sharxlar')->withAvg('sharxlar', 'reyting')->find($id);
        $courses = Cources::select('*')->where('ins_id', '=', $course->user->id)->paginate();
        $students = 0;
        $user = User::withCount('ins_sharx')->withCount('cources')->withAvg('ins_sharx', 'reyting')->find($course->ins_id);

        $include = Cources_includes::where('cours_id', '=', $id)->get();
        $desc = Cources_discription::get();

        $sharx = Courses_sharxlar::where('user_id', '=', $course->user->id)->orderBy('created_at', 'desc')->paginate(16);
        if (!$course->sharxlar_count == 0) {
            $stars5 = (Courses_sharxlar::where('user_id', '=', $id)
                ->where('reyting', '=', 5)
                ->count()) * 100 / $course->sharxlar_count;
            $stars3 = (Courses_sharxlar::where('user_id', '=', $id)
                ->where('reyting', '=', 3)
                ->count()) * 100 / $course->sharxlar_count;
            $stars4 = (Courses_sharxlar::where('user_id', '=', $id)
                ->where('reyting', '=', 4)
                ->count()) * 100 / $course->sharxlar_count;
            $stars2 = (Courses_sharxlar::where('user_id', '=', $id)
                ->where('reyting', '=', 2)
                ->count()) * 100 / $course->sharxlar_count;
            $stars1 = (Courses_sharxlar::where('user_id', '=', $id)
                ->where('reyting', '=', 1)
                ->count()) * 100 / $course->sharxlar_count;
        } else {
            $stars5 = 0;
            $stars1 = 0;
            $stars2 = 0;
            $stars3 = 0;
            $stars4 = 0;
        }

        foreach ($courses as $c) {

            $a = DB::select('select * from student_buy_courses where cours_id = ?', [$c->id]);
            foreach ($a as $d) {
                $students = $students + 1;
            }
        }


    if(isset(auth()->user()->id)){
        $auth_id = auth()->user()->id;
    }else{
        $auth_id = -5;
    }

        $buy = Student_buy_course::where('user_id', '=', $auth_id)->where('cours_id', '=', $id)->first();
        $card = Student_cards_courses::where('user_id', '=', $auth_id)->where('cours_id', '=', $id)->first();
        $video = Video_tip::where('cource_id', '=', $id)->get();
        return view("course.course_single", [
            'cource' => $course, 'desc' => $desc, 'user' => $user, 'students' => $students,'auth'=>$auth_id,
            'stars5' => $stars5, 'stars4' => $stars4, 'stars3' => $stars3, 'stars2' => $stars2, 'stars1' => $stars1, 'sharx' => $sharx,
            'includes' => $include, 'video' => $video, 'buy' => $buy,'card'=>$card,'category'=>$category,'eduhub'=>$eduhub
        ]);
    }

    public function course_single_edit($id)
    {
        $t = app()->getLocale('lang');
        $eduhub=Eduhub::orderBy('id', 'desc')->first();
       $category=DB::select('select * from category_' . $t . 's order by name' );

        $course = Cources::select('*')->withCount('students')
            ->withCount('video')->withCount('sharxlar')->withAvg('sharxlar', 'reyting')->find($id);
        $courses = Cources::select('*')->where('ins_id', '=', $course->user->id)->paginate();
        $students = 0;
        $user = User::withCount('ins_sharx')->withCount('cources')->withAvg('ins_sharx', 'reyting')->find($course->ins_id);

        $include = Cources_includes::where('cours_id', '=', $id)->get();
        $desc = Cources_discription::get();

        $sharx = Courses_sharxlar::where('user_id', '=', $course->user->id)->orderBy('created_at', 'desc')->paginate(16);
        if (!$course->sharxlar_count == 0) {
            $stars5 = (Courses_sharxlar::where('user_id', '=', $id)
                ->where('reyting', '=', 5)
                ->count()) * 100 / $course->sharxlar_count;
            $stars3 = (Courses_sharxlar::where('user_id', '=', $id)
                ->where('reyting', '=', 3)
                ->count()) * 100 / $course->sharxlar_count;
            $stars4 = (Courses_sharxlar::where('user_id', '=', $id)
                ->where('reyting', '=', 4)
                ->count()) * 100 / $course->sharxlar_count;
            $stars2 = (Courses_sharxlar::where('user_id', '=', $id)
                ->where('reyting', '=', 2)
                ->count()) * 100 / $course->sharxlar_count;
            $stars1 = (Courses_sharxlar::where('user_id', '=', $id)
                ->where('reyting', '=', 1)
                ->count()) * 100 / $course->sharxlar_count;
        } else {
            $stars5 = 0;
            $stars1 = 0;
            $stars2 = 0;
            $stars3 = 0;
            $stars4 = 0;
        }

        foreach ($courses as $c) {

            $a = DB::select('select * from student_buy_courses where cours_id = ?', [$c->id]);
            foreach ($a as $d) {
                $students = $students + 1;
            }
        }


if(isset(auth()->user()->id)){
    $auth_id = auth()->user()->id;
}else{
    $auth_id = -5;
}

        $buy = Student_buy_course::where('user_id', '=', $auth_id)->where('cours_id', '=', $id)->first();
        $video = Video_tip::where('cource_id', '=', $id)->get();
        return view("course.course_single_edit", [
            'cource' => $course, 'desc' => $desc, 'user' => $user, 'students' => $students,'auth'=>$auth_id,
            'stars5' => $stars5, 'stars4' => $stars4, 'stars3' => $stars3, 'stars2' => $stars2, 'stars1' => $stars1, 'sharx' => $sharx,
            'includes' => $include, 'video' => $video, 'buy' => $buy,'category'=>$category,'eduhub'=>$eduhub
        ]);
    }



    /*
teacher profil

 */


    public function teacher_sharx(Request $request, $id,)
    {
        $data = $request->validate([
            'reviewRating' => 'in:1,,2,3,4,5|required',
            'text' => 'required',
            'user_id' => 'required'
        ]);

        $n = new Instructor_sharxlar();
        $n->reyting = $data['reviewRating'];
        $n->user_id = $id;
        $n->student_id = $data['user_id'];
        $n->sharx = $data['text'];
        $n->save();
        return redirect('/instructor-single/' . $id.'/'.$id);
    }

    public function instructor_single($id, $id2)
    {
        $t = app()->getLocale('lang');
        $eduhub=Eduhub::orderBy('id', 'desc')->first();
       $category=DB::select('select * from category_' . $t . 's order by name' );

        $edit=0;
        if(($id==$id2)){
            $edit=1;
        }
        $sharx = Instructor_sharxlar::where('user_id', '=', $id)->orderBy('created_at', 'desc')->paginate(16);
        $avg = Instructor_sharxlar::where('user_id', '=', $id)->avg('reyting');
        $sharx_count = Instructor_sharxlar::where('user_id', '=', $id)->count();
        if (!$sharx_count == 0) {
            $stars5 = (Instructor_sharxlar::where('user_id', '=', $id)
                ->where('reyting', '=', 5)
                ->count()) * 100 / $sharx_count;
            $stars3 = (Instructor_sharxlar::where('user_id', '=', $id)
                ->where('reyting', '=', 3)
                ->count()) * 100 / $sharx_count;
            $stars4 = (Instructor_sharxlar::where('user_id', '=', $id)
                ->where('reyting', '=', 4)
                ->count()) * 100 / $sharx_count;
            $stars2 = (Instructor_sharxlar::where('user_id', '=', $id)
                ->where('reyting', '=', 2)
                ->count()) * 100 / $sharx_count;
            $stars1 = (Instructor_sharxlar::where('user_id', '=', $id)
                ->where('reyting', '=', 1)
                ->count()) * 100 / $sharx_count;
        } else {
            $stars5 = 0;
            $stars1 = 0;
            $stars2 = 0;
            $stars3 = 0;
            $stars4 = 0;
        }

        $tajriba = Instructor_tajriba::where('user_id', '=', $id)->orderBy('date1')->get();
        $edu = Instructor_education::where('user_id', '=', $id)->orderBy('date1')->get();



        $user = User::findOrFail($id);
        $url = User_link::find($id);
        $courses = Cources::select('*')->where('ins_id', '=', $id)->withCount('students')->withCount('sharxlar')->withAvg('sharxlar', 'reyting')->paginate();
        $count_cources = User::find($id)->cources->count();
        $about = instructor_about::where("user_id", '=', $id)->first();
        $student_count = 0;

        foreach ($courses as $c) {

            $a = DB::select('select * from student_buy_courses where cours_id = ?', [$c->id]);
            foreach ($a as $d) {
                $student_count = $student_count + 1;
            }
        }
        return view("inctructor.instructor-single", [
            'sharx_count' => $sharx_count,
            'about' => $about, 'stars' => $avg, 'user' => $user, 'url' => $url,
            'student' => $student_count, 'c_count' => $count_cources, 'cources' => $courses,
            'stars5' => $stars5, 'stars4' => $stars4, 'stars3' => $stars3, 'stars2' => $stars2, 'stars1' => $stars1,
            'sharx' => $sharx, 'tajriba' => $tajriba, 'edu' => $edu, 'edit'=>$edit,'category'=>$category,'eduhub'=>$eduhub
        ]);
    }

    /*
User Profil teacher va student uchun
*/



    public function user_profil($id)
    {
        $user = User::findOrFail($id);
        $url = User_link::find($id);

        $t = app()->getLocale('lang');
        $eduhub=Eduhub::orderBy('id', 'desc')->first();
       $category=DB::select('select * from category_' . $t . 's order by name' );

        return view('sign.profil', ['nu' => $user, "url" => $url, 'category'=>$category,'eduhub'=>$eduhub]);
    }
    public function user_update(Request $req, $id)
    {
        $n = User::find($id);
        $user = User::find($id);
        $user_link = User_link::where('user_id','=',$id)->first();
        if ($user_link!==null ){
            $url = $user_link;
        } else {
            $url = new User_link();
        }

        $data = $req->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);


        if ($user->email === $req->email) {
            $data = $req->validate([
                'email' => ['required', 'string', 'email', 'max:255'],
            ]);
            $n->email = $req->email;
        } else {
            $data = $req->validate([
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            ]);
            $n->email = $req->email;
        }
        if (strlen($req->sname) >= 1) {
            $data = $req->validate([
                'sname' => ['required', 'string', 'max:255'],
            ]);
            $n->sname = $req->sname;
        }
        if (strlen($req->tell) >= 1) {
            $data = $req->validate([
                'tell' => 'required|min:9|numeric'
            ]);
            $n->tell = $req->tell;
        }
        if (strlen($req->instagram) >= 1) {
            $data = $req->validate([
                'instagram' => ['required', 'string', 'max:255'],
            ]);
            $url->instagram = $req->instagram;
            $url->user_id = $id;
        }
        if (strlen($req->telegram) >= 1) {
            $data = $req->validate([
                'telegram' => ['required', 'string', 'max:255'],
            ]);
            $url->telegram = $req->telegram;
            $url->user_id = $id;
        }
        if (strlen($req->facebook) >= 1) {
            $data = $req->validate([
                'facebook' => ['required', 'string', 'max:255'],
            ]);
            $url->facebook = $req->facebook;
            $url->user_id = $id;
        }
        if (strlen($req->youtube) >= 1) {
            $data = $req->validate([
                'youtube' => ['required', 'string', 'max:255'],
            ]);
            $url->youtube = $req->youtube;
            $url->user_id = $id;
        }


        if ($req->has("img")) {
            $data = $req->validate([
                'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            ]);
            $filemodel = $req->file('img');
            $fileNameWithExt = $filemodel->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $ext = $filemodel->getClientOriginalExtension();
            $fileNameToStory = $filename . '_' . time() . "." . $ext;
            $path = $filemodel->storeAs('public/user/', $fileNameToStory);
            $n->img = $fileNameToStory;
        } else {
            $fileNameToStory = "user.png";
            $n->img = $fileNameToStory;
        }

        if (strlen($req->oldpassword) >= 1  and (!Hash::check($req->oldpassword, $user->password))) {

            $data = $req->validate([
                'oldpassword' => ['required', 'string', 'min:8'],
            ]);
            $pass = "Eski parolni hato kiritdingiz";
            return redirect()->back()->withErrors($pass)->withInput();
        } else {
            if (strlen($req->newpassword) >= 1 and (!strlen($req->resetpassword) >= 1)) {
                $pass = "Reset Password bo'limini toldiring";
                $data = $req->validate([
                    'oldpassword' => ['required', 'string', 'min:8',],
                    'newpassword' => [
                        'required',
                        'string',
                        'min:10',             // must be at least 10 characters in length
                        'regex:/[a-z]/',      // must contain at least one lowercase letter
                        'regex:/[A-Z]/',      // must contain at least one uppercase letter
                        'regex:/[0-9]/',      // must contain at least one digit
                        'regex:/[@$!%*#?&]/', // must contain a special character
                    ],
                    'resetpassword' => [
                        'required',
                        'string',
                        'min:10',             // must be at least 10 characters in length
                        'regex:/[a-z]/',      // must contain at least one lowercase letter
                        'regex:/[A-Z]/',      // must contain at least one uppercase letter
                        'regex:/[0-9]/',      // must contain at least one digit
                        'regex:/[@$!%*#?&]/', // must contain a special character
                    ],
                ]);
                return redirect()->back()->withErrors($pass)->withInput();
            }
            if (strlen($req->resetpassword) >= 1 and (!strlen($req->newpassword) >= 1)) {
                $pass = "New Password bo'limini toldiring";
                $data = $req->validate([
                    'resetpassword' => ['required', 'string', 'min:8'],
                ]);
                return redirect()->back()->withErrors($pass)->withInput();
            }
            if ($req->newpassword === $req->oldpassword and strlen($req->newpassword) >= 1) {
                $pass = "Yangi parolni qayta kiriting. Eski parolingizni takrorladingiz.";
                return redirect()->back()->withErrors($pass)->withInput();
            }
            if ((strlen($req->resetpassword) >= 1  and strlen($req->newpassword) >= 1) and (!$req->newpassword === $req->resetpassword)) {
                $pass = "Yangi parollar bir xil emas";
                $data = $req->validate([
                    'resetpassword' => ['required', 'string', 'min:8', 'confirmed'],
                    'newpassword' => ['required', 'string', 'min:8', 'confirmed'],
                ]);
                return redirect()->back()->withErrors($pass)->withInput();
            }
            if ((strlen($req->newpassword) >= 1  and strlen($req->resetpassword) >= 1) and $req->newpassword === $req->resetpassword) {
                $data = $req->validate([
                    'resetpassword' =>[
                        'required',
                        'string',
                        'min:10',             // must be at least 10 characters in length
                        'regex:/[a-z]/',      // must contain at least one lowercase letter
                        'regex:/[A-Z]/',      // must contain at least one uppercase letter
                        'regex:/[0-9]/',      // must contain at least one digit
                        'regex:/[@$!%*#?&]/', // must contain a special character
                    ],
                    'newpassword' => [
                        'required',
                        'string',
                        'min:10',             // must be at least 10 characters in length
                        'regex:/[a-z]/',      // must contain at least one lowercase letter
                        'regex:/[A-Z]/',      // must contain at least one uppercase letter
                        'regex:/[0-9]/',      // must contain at least one digit
                        'regex:/[@$!%*#?&]/', // must contain a special character
                    ],
                ]);
                $password = Hash::make($data['newpassword']);
                $n->password = $password;
            }
        }

        $n->name = $req->name;
        if (strlen($req->youtube) >= 1 or  (strlen($req->telegram) >= 1) or  (strlen($req->instagram) >= 1) or (strlen($req->facebook) >= 1)) {
            $url->save();
        }

        $n->save();
        return redirect('home');
    }




}
