<?php

namespace App\Http\Controllers;
use App\Models\Instructor_about;
use App\Models\Instructor_tajriba;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function about_edit($id)
    {
        $about=Instructor_about::where('user_id','=',$id)->first();
        return view('inctructor.about.edit',['about'=>$about]);

    }
    public function about_update(Request $req, $id)
    {
        $data = $req->validate([
            'text' => 'required',

        ]);
        $n = Instructor_about::find($id);


        $n->text = $data['text'];

        $n->save();

        return redirect('/home');
    }
    public function about_dell($id)
    {
        $cu =Instructor_about::where('user_id','=', $id)->first();
        $cu->delete();

        return redirect('/home');
    }
    public function about_add($id){
        return view('inctructor.about.add',['user_id'=>$id]);
    }

    public function about_save(Request $req)
    {
        $data = $req->validate([
            'text' => 'required',
            'ins_id' => 'required'
        ]);
        $n =new Instructor_about();
        $n->user_id = $data['ins_id'];
        $n->text = $data['text'];
        $n->save();
        return redirect('/home');
    }




    public function tajriba_edit($id)
    {
        $about=Instructor_tajriba::where('user_id','=',$id)->first();
        return view('inctructor.tajriba.edit',['t'=>$about]);

    }
    public function tajriba_update(Request $req, $id)
    {
        $data = $req->validate([
            'date1'=>'required',
            'date2'=>'required',
            'name'=>'required',
            'text' => 'required',

        ]);
        $n = Instructor_tajriba::find($id);

        $n->name=$data['name'];
        $n->text = $data['text'];
        $n->date1=$data['date1'];
        $n->date2=$data['date2'];

        $n->save();

        return redirect('/home');
    }
    public function tajriba_dell($id)
    {
        $cu =Instructor_tajriba::where('id','=', $id)->first();
        $cu->delete();

        return redirect('/home');
    }
    public function tajriba_add($id){
        return view('inctructor.tajriba.add',['user_id'=>$id]);
    }

    public function tajriba_save(Request $req)
    {
        $data = $req->validate([
            'date1'=>'required',
            'date2'=>'required',
            'name'=>'required',
            'user_id'=>'required',
            'text' => 'required',
        ]);
        $n =new Instructor_tajriba();
        $n->name=$data['name'];
        $n->date1=$data['date1'];
        $n->date2=$data['date2'];
        $n->user_id = $data['user_id'];
        $n->text = $data['text'];
        $n->save();
        return redirect('/home');
    }


}
