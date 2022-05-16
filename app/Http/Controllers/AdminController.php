<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eduhub;
use App\Models\Category_en;
use App\Models\Category_ru;
use App\Models\Category_uz;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

/*Category table
*/
public function nega(){
    $t = app()->getLocale('lang');
    $nega=DB::select('select * from nega_' . $t . 's  limit 3');
    return view('adminpanel/Nega_EduHub/index',['cat'=>$nega]);
}
    public function category(){
        $t = app()->getLocale('lang');
        $cat=DB::select('select * from category_' . $t . 's  limit 3');
        return view('adminpanel/category/index',['cat'=>$cat]);
    }
    public function category_add(){
        $t = app()->getLocale('lang');
        $cat=DB::select('select * from category_' . $t . 's  limit 3');
        return view('adminpanel/category/add');
    }
    public function category_edit($id)
    {
        $cu=Category_uz::findOrFail($id);
        $cr=Category_ru::findOrFail($id);
        $ce=Category_en::findOrFail($id);
        return view('adminpanel.category.edit',['cu'=>$cu,'cr'=>$cr,'ce'=>$ce]);
    }
    public function category_dell( $id){
        $cu=Category_uz::findOrFail($id);
        $cr=Category_ru::findOrFail($id);
        $ce=Category_en::findOrFail($id);
       $ce->delete();
       $cu->delete();
       $cr->delete();
       return redirect('/admin/category');
    }
    public function category_update(Request $req, $id){
        $data=$req->validate([
            'name_uz'=>'required',
            'name_en'=>'required',
            'name_ru'=>'required',
            'icon'=>'required',
            'color'=>'required',
        ]);
        $ce=Category_en::find($id);
        $cu=Category_uz::find($id);
        $cr=Category_ru::find($id);

        $cu->name=$data['name_uz'];
        $cu->icon=$data['icon'];
        $cu->color=$data['color'];

        $cr->name=$data['name_ru'];
        $cr->icon=$data['icon'];
        $cr->color=$data['color'];

        $ce->name=$data['name_en'];
        $ce->icon=$data['icon'];
        $ce->color=$data['color'];

        $cu->save();
        $cr->save();
        $ce->save();
        return redirect('/admin/category');

    }
    public function category_save(Request $req){
        $data=$req->validate([
            'name_uz'=>'required',
            'name_en'=>'required',
            'name_ru'=>'required',
            'icon'=>'required',
            'color'=>'required',
        ]);
        $ce=new Category_en();
        $cu=new Category_uz();
        $cr=new Category_ru();

        $cu->name=$data['name_uz'];
        $cu->icon=$data['icon'];
        $cu->color=$data['color'];

        $cr->name=$data['name_ru'];
        $cr->icon=$data['icon'];
        $cr->color=$data['color'];

        $ce->name=$data['name_en'];
        $ce->icon=$data['icon'];
        $ce->color=$data['color'];

        $cu->save();
        $cr->save();
        $ce->save();
        return redirect('/admin/category');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eduhub=Eduhub::all();
        return view('adminpanel.EduHub.index',['eduhub'=>$eduhub]);
    }
    public function eduhub_add()
    {
        return view('adminpanel.EduHub.add');
    }
    public function eduhub_addsave(Request $request)
    {
        $data=$request->validate([
            'tell'=>'required',
            'email'=>'required','email',
            'telegram'=>'required',
            'facebook'=>'required',
            'you-tube'=>'required',
            'instagram'=>'required',
            'google_play'=>'required',
            'app_story'=>'required',
            'adress'=>'required',
            'office_open'=>'required',
            'office_close'=>'required',
            'awards_count'=>'required',
        ]);

        $Eduhub=new Eduhub;
        $Eduhub->tell=$data['tell'];
        $Eduhub->email=$data['email'];
        $Eduhub->adress=$data['adress'];
        $Eduhub->awards_count=$data['awards_count'];
        $Eduhub->office_open=$data['office_open'];
        $Eduhub->office_close=$data['office_close'];
        $Eduhub->facebook=$data['facebook'];
        $Eduhub->telegram=$data['telegram'];
        $Eduhub->instagram=$data['instagram'];
        $Eduhub->you_tube=$data['you-tube'];
        $Eduhub->app_story=$data['app_story'];
        $Eduhub->google_play=$data['google_play'];
        $Eduhub->save();
        return redirect('/adminpanel');
    }
    public function eduhub_edit($id)
    {
        $eduhub=Eduhub::findOrFail($id);
        return view('adminpanel.EduHub.edit',['eduhub'=>$eduhub]);
    }
    public function eduhub_update(Request $request, $id)
    {
        $data=$request->validate([
            'tell'=>'required',
            'email'=>'required','email',
            'telegram'=>'required',
            'facebook'=>'required',
            'you-tube'=>'required',
            'instagram'=>'required',
            'google_play'=>'required',
            'app_story'=>'required',
            'adress'=>'required',
            'office_open'=>'required',
            'office_close'=>'required',
            'awards_count'=>'required',
        ]);

        $Eduhub=Eduhub::findOrFail($id);
        $Eduhub->tell=$data['tell'];
        $Eduhub->email=$data['email'];
        $Eduhub->adress=$data['adress'];
        $Eduhub->awards_count=$data['awards_count'];
        $Eduhub->office_open=$data['office_open'];
        $Eduhub->office_close=$data['office_close'];
        $Eduhub->facebook=$data['facebook'];
        $Eduhub->telegram=$data['telegram'];
        $Eduhub->instagram=$data['instagram'];
        $Eduhub->you_tube=$data['you-tube'];
        $Eduhub->app_story=$data['app_story'];
        $Eduhub->google_play=$data['google_play'];
        $Eduhub->save();
        return redirect('/adminpanel');
    }
    public function eduhub_dell($id)
    {
        $eduhub=Eduhub::findOrFail($id);
       $eduhub->delete();
       return redirect('/adminpanel');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
