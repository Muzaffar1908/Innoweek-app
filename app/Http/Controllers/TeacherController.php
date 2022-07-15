<?php

namespace App\Http\Controllers;

use App\Models\Instructor_about;
use App\Models\Instructor_tajriba;
use App\Models\Instructor_education;
use App\Models\Cources;
use App\Models\Categories;
use App\Models\Cource_includes_row;
use Illuminate\Http\Request;
use App\Models\Cources_includes;
use Illuminate\Support\Facades\DB;
use App\Models\Cources_discription;

class TeacherController extends Controller
{
/**
 * Cource includes
 */



    public function includes_edit($id)
    {
        $about = Cources_includes::find($id);
        return view('course.includes.edit', ['desc' => $about]);
    }
    public function includes_update(Request $req, $id)
    {
        $data = $req->validate([
            'text' => 'required',
        ]);
        $n = Cources_includes::find($id);
        $n->text = $data['text'];
        $n->save();

        return redirect('/course-single/' . $n->cours_id);
    }
    public function includes_dell($id)
    {
        $cu = Cources_includes::find($id);
        $c_id = $cu->cours_id;

        $cu->delete();

        return redirect('/course-single/' . $c_id);
    }
    public function includes_add($id)
    {
        return view('course.includes.add', ['c_id' => $id]);
    }

    public function includes_save(Request $req)
    {
        $data = $req->validate([
            'text' => 'required',
            'cource_id' => 'required',

        ]);
        $n = new Cources_includes();
        $c_id = $data['cource_id'];
        $n->cours_id = $data['cource_id'];
        $n->text = $data['text'];
        $n->save();
        return redirect('/course-single/' . $c_id);
    }



    /**
     * Description rows
     */



    public function desc_row_edit($id)
    {
        $about = Cource_includes_row::find($id);
        return view('course.desc_row.edit', ['desc' => $about]);
    }
    public function desc_row_update(Request $req, $id)
    {
        $data = $req->validate([
            'text' => 'required',

        ]);
        $n = Cource_includes_row::find($id);
        $n->text = $data['text'];
        $n->save();

        return redirect('/course-single/' . $n->cource_id);
    }
    public function desc_row_dell($id)
    {
        $cu = Cource_includes_row::find($id);
        $c_id = $cu->cource_id;

        $cu->delete();

        return redirect('/course-single/' . $c_id);
    }
    public function desc_row_add($id, $c_id)
    {
        return view('course.desc_row.add', ['desc_id' => $id,'c_id'=>$c_id]);
    }

    public function desc_row_save(Request $req)
    {
        $data = $req->validate([
            'text' => 'required',
            'cource_id' => 'required',
            'desc_id' => 'required'
        ]);
        $n = new Cource_includes_row();
        $c_id = $data['cource_id'];
        $n->cource_id = $data['cource_id'];
        $n->text = $data['text'];
        $n->disc_id = $data['desc_id'];
        $n->save();
        return redirect('/course-single/' . $c_id);
    }






    /**
     * Cource Description
     */


    public function desc_edit($id)
    {
        $about = Cources_discription::find($id);
        return view('course.description.edit', ['desc' => $about]);
    }
    public function desc_update(Request $req, $id)
    {
        $data = $req->validate([
            'text' => 'required',
            'title' => 'required',

        ]);
        $n = Cources_discription::find($id);


        $n->text = $data['text'];
        $n->title = $data['title'];

        $n->save();

        return redirect('/instructor-single/' . $n->cours_id);
    }
    public function desc_dell($id)
    {
        $cu = Cources_discription::find($id);
        $c_id = $cu->cours_id;
        foreach ($cu as $c) {
            $rows = Cource_includes_row::where('disc_id', '=', $id)->first();
            if (!$rows == null) {
                $rows->delete();
            }
        }
        $cu->delete();

        return redirect('/course-single/' . $c_id);
    }
    public function desc_add($id)
    {
        return view('course.description.add', ['cours_id' => $id]);
    }

    public function desc_save(Request $req)
    {
        $data = $req->validate([
            'text' => 'required',
            'title' => 'required',
            'cource_id' => 'required'
        ]);
        $n = new Cources_discription();
        $c_id = $data['cource_id'];
        $n->cours_id = $data['cource_id'];
        $n->text = $data['text'];
        $n->title = $data['title'];
        $n->save();
        return redirect('/course-single/' . $c_id);
    }





    /**
     * Add new coure
     */




    public function course_edit($id)
    {
        $t = app()->getLocale('lang');
        $cat = DB::select('select * from category_' . $t . 's ');
        $about = Cources::find($id);
        return view('course.edit', ['course' => $about, 'cat' => $cat]);
    }
    public function course_update(Request $req, $id)
    {
        $n = Cources::find($id);

        $data = $req->validate([
            'text' => 'required',
            'narx' => 'required',
            'name' => 'required',
            'lang' => 'required',
            'cat_id' => 'required',

            'lenght' => 'required',
            'uroven' => 'required',
            'davomiylik' => 'required',
        ]);
        if ($req->hasFile('img')) {
            $filemodel = $req->file('img');
            $fileNameWithExt = $filemodel->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $ext = $filemodel->getClientOriginalExtension();
            $fileNameToStory = $filename . '_' . time() . "." . $ext;
            $path = $filemodel->storeAs('public/course/', $fileNameToStory);
            $n->img = $fileNameToStory;
        }
        if ($req->has('eski_narx')) {
            $n->eski_narx = $req->eski_narx;
        }
        if ($req->eski_narx == null) {
            $n->eski_narx = "0";
        }
        $n->name = $data['name'];
        $n->cat_id = $data['cat_id'];
        $n->narx = $data['narx'];
        $n->lang = $data['lang'];
        $n->uroven = $data['uroven'];
        $n->lenght = $data['lenght'];
        $n->text = $data['text'];
        $n->davomiylik = $data['davomiylik'];

        $n->save();
        return redirect('/cource-single/' . $id);
    }
    public function course_dell($id)
    {
        $cu = Cources::where('id', '=', $id)->first();
        $ins_id = $n->ins_id;
        $cu->delete();

        return redirect('/instructor-single/' . $ins_id);
    }
    public function course_add($id)
    {
        $t = app()->getLocale('lang');
        $cat = DB::select('select * from category_' . $t . 's ');
        return view('course.add', ['user_id' => $id, 'cat' => $cat]);
    }

    public function course_save(Request $req)
    {
        $data = $req->validate([
            'text' => 'required',
            'narx' => 'required',
            'name' => 'required',
            'lang' => 'required',
            'cat_id' => 'required',
            'user_id' => 'required',
            'lenght' => 'required',
            'uroven' => 'required',
            'davomiylik' => 'required',
            'img' => 'required|mimes:jpeg,png,jpg,gif'
        ]);
        if ($req->hasFile('img')) {
            $filemodel = $req->file('img');
            $fileNameWithExt = $filemodel->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $ext = $filemodel->getClientOriginalExtension();
            $fileNameToStory = $filename . '_' . time() . "." . $ext;
            $path = $filemodel->storeAs('public/course/', $fileNameToStory);
        } else {
            $fileNameToStory = "No_image.jpg";
        };

        $n = new Cources();
        $n->name = $data['name'];
        $n->cat_id = $data['cat_id'];
        $n->narx = $data['narx'];
        $n->eski_narx = "0";
        $n->count = "0";
        $n->lang = $data['lang'];
        $n->uroven = $data['uroven'];
        $n->lenght = $data['lenght'];
        $n->ins_id = $data['user_id'];
        $n->text = $data['text'];
        $n->davomiylik = $data['davomiylik'];
        $n->admin = "0";
        $n->img = $fileNameToStory;
        $n->save();
        $ins_id = $data['user_id'];
        return redirect('/instructor-single/' . $ins_id);
    }



    /**
     *
     * Teacher profil
     */


    public function about_edit($id)
    {
        $about = Instructor_about::find($id);
        return view('inctructor.about.edit', ['about' => $about]);
    }
    public function about_update(Request $req, $id)
    {
        $data = $req->validate([
            'text' => 'required',

        ]);
        $n = Instructor_about::find($id);


        $n->text = $data['text'];

        $n->save();

        return redirect('/instructor-single/' . $n->user_id);
    }
    public function about_dell($id)
    {
        $cu = Instructor_about::where('user_id', '=', $id)->first();
        $user_id = $cu->user_id;
        $cu->delete();

        return redirect('/instructor-single/' . $user_id);
    }
    public function about_add($id)
    {
        return view('inctructor.about.add', ['user_id' => $id]);
    }

    public function about_save(Request $req)
    {
        $data = $req->validate([
            'text' => 'required',
            'ins_id' => 'required'
        ]);
        $n = new Instructor_about();
        $n->user_id = $data['ins_id'];
        $n->text = $data['text'];
        $n->save();
        return redirect('/instructor-single/' . $data['user_id']);
    }



    public function tajriba_edit($id)
    {
        $about = Instructor_tajriba::where('user_id', '=', $id)->first();
        return view('inctructor.tajriba.edit', ['t' => $about]);
    }
    public function tajriba_update(Request $req, $id)
    {
        $data = $req->validate([
            'date1' => 'required',
            'date2' => 'required',
            'name' => 'required',
            'text' => 'required',

        ]);
        $n = Instructor_tajriba::find($id);

        $n->name = $data['name'];
        $n->text = $data['text'];
        $n->date1 = $data['date1'];
        $n->date2 = $data['date2'];

        $n->save();

        return redirect('/instructor-single/' . $n->user_id);
    }
    public function tajriba_dell($id)
    {
        $cu = Instructor_tajriba::where('id', '=', $id)->first();
        $n = $cu->user_id;
        $cu->delete();

        return redirect('/instructor-single/' . $n);
    }
    public function tajriba_add($id)
    {
        return view('inctructor.tajriba.add', ['user_id' => $id]);
    }

    public function tajriba_save(Request $req)
    {
        $data = $req->validate([
            'date1' => 'required',
            'date2' => 'required',
            'name' => 'required',
            'user_id' => 'required',
            'text' => 'required',
        ]);
        $n = new Instructor_tajriba();
        $n->name = $data['name'];
        $n->date1 = $data['date1'];
        $n->date2 = $data['date2'];
        $n->user_id = $data['user_id'];
        $n->text = $data['text'];
        $n->save();
        return redirect('/instructor-single/' . $data['user_id']);
    }





    public function edu_edit($id)
    {
        $about = Instructor_education::where('id', '=', $id)->first();
        return view('inctructor.edu.edit', ['t' => $about]);
    }
    public function edu_update(Request $req, $id)
    {
        $data = $req->validate([
            'date1' => 'required',
            'date2' => 'required',
            'name' => 'required',
            'text' => 'required',

        ]);
        $n = Instructor_education::find($id);

        $n->name = $data['name'];
        $n->text = $data['text'];
        $n->date1 = $data['date1'];
        $n->date2 = $data['date2'];

        $n->save();

        return redirect('/instructor-single/' . $n->user_id);
    }
    public function edu_dell($id)
    {
        $cu = Instructor_education::find($id);
        $n = $cu->user_id;
        $cu->delete();

        return redirect('/instructor-single/' . $n);
    }
    public function edu_add($id)
    {
        return view('inctructor.edu.add', ['user_id' => $id]);
    }

    public function edu_save(Request $req)
    {
        $data = $req->validate([
            'date1' => 'required',
            'date2' => 'required',
            'name' => 'required',
            'user_id' => 'required',
            'text' => 'required',
        ]);
        $n = new Instructor_education();
        $n->name = $data['name'];
        $n->date1 = $data['date1'];
        $n->date2 = $data['date2'];
        $n->user_id = $data['user_id'];
        $n->text = $data['text'];
        $n->save();
        return redirect('/instructor-single/' . $data['user_id']);
    }
}
