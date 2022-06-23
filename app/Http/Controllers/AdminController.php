<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eduhub;
use App\Models\Category_en;
use App\Models\Category_ru;
use App\Models\Category_uz;
use App\Models\Eduhub_nega_en;
use App\Models\Eduhub_nega_uz;
use App\Models\Eduhub_nega_ru;
use App\Models\Eduhub_steps_en;
use App\Models\Eduhub_steps_ru;
use App\Models\Eduhub_steps_uz;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{



/*EduHub_nega
*/
public function steps(){
    $t = app()->getLocale('lang');
    $steps=DB::select('select * from eduhub_steps_' . $t . 's ');
   return view('adminpanel/Steps/index',['nega'=>$steps]);
}
public function steps_add(){
    return view('adminpanel/Steps/add');
}

public function steps_save(Request $req){
    $data=$req->validate([
        'title_uz'=>'required',
        'title_en'=>'required',
        'title_ru'=>'required',
        'link_youtube'=>'required',

        'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',

        'title1_uz'=>'required',
        'text1_uz'=>'required',
        'title1_en'=>'required',
        'text1_en'=>'required',
        'title1_ru'=>'required',
        'text1_ru'=>'required',

        'title2_uz'=>'required',
        'text2_uz'=>'required',
        'title2_en'=>'required',
        'text2_en'=>'required',
        'title2_ru'=>'required',
        'text2_ru'=>'required',

        'title3_uz'=>'required',
        'text3_uz'=>'required',
        'title3_en'=>'required',
        'text3_en'=>'required',
        'title3_ru'=>'required',
        'text3_ru'=>'required',

    ]);
    if($req->hasFile('img') ){
        $filemodel=$req->file('img');
        $fileNameWithExt=$filemodel->getClientOriginalName();
        $filename=pathinfo($fileNameWithExt,PATHINFO_FILENAME);
        $ext=$filemodel->getClientOriginalExtension();
        $fileNameToStory=$filename.'_'.time().".".$ext;
        $path=$filemodel->storeAs('public/steps/',$fileNameToStory);
    }else{
        $fileNameToStory="No_image.jpg";
    };
    $ne=new Eduhub_steps_en();
    $nr=new Eduhub_steps_ru();
    $nu=new Eduhub_steps_uz();

    $nu->link_youtube=$data['link_youtube'];
    $nr->link_youtube=$data['link_youtube'];
    $ne->link_youtube=$data['link_youtube'];

    $nu->img=$fileNameToStory;
    $nr->img=$fileNameToStory;
    $ne->img=$fileNameToStory;

    $nu->title=$data['title_uz'];
    $nr->title=$data['title_ru'];
    $ne->title=$data['title_en'];

    $nu->text1=$data['text1_uz'];
    $nu->title1=$data['title1_uz'];
    $nr->text1=$data['text1_ru'];
    $nr->title1=$data['title1_ru'];
    $ne->text1=$data['text1_en'];
    $ne->title1=$data['title1_en'];

    $nu->text2=$data['text2_uz'];
    $nu->title2=$data['title2_uz'];
    $nr->text2=$data['text2_ru'];
    $nr->title2=$data['title2_ru'];
    $ne->text2=$data['text2_en'];
    $ne->title2=$data['title2_en'];

    $nu->text3=$data['text3_uz'];
    $nu->title3=$data['title3_uz'];
    $nr->text3=$data['text3_ru'];
    $nr->title3=$data['title3_ru'];
    $ne->text3=$data['text3_en'];
    $ne->title3=$data['title3_en'];



    $nu->save();
    $nr->save();
    $ne->save();
    return redirect('/admin/negaEduHub');

}
public function steps_edit($id){
    $ne=Eduhub_steps_en::find($id);
    $nu=Eduhub_steps_uz::find($id);
    $nr=Eduhub_steps_uz::find($id);
    return view('adminpanel/Steps/edit',['ne'=>$ne,'nu'=>$nu,'nr'=>$nr]);

}





/*EduHub_nega
*/
public function nega(){
    $t = app()->getLocale('lang');
    $nega=DB::select('select * from eduhub_nega_' . $t . 's  ');
    return view('adminpanel/Nega_EduHub/index',['nega'=>$nega]);
}
public function nega_edit( $id){
    $ne=Eduhub_nega_en::find($id);
    $nr=Eduhub_nega_ru::find($id);
    $nu=Eduhub_nega_uz::find($id);
    return view('adminpanel/Nega_EduHub/edit',['ne'=>$ne,'nu'=>$nu,'nr'=>$nr]);
}
public function nega_add(){
       return view('adminpanel/Nega_EduHub/add');
}
public function nega_save(Request $req){
    $data=$req->validate([
        'text_uz'=>'required',
        'title_uz'=>'required',
        'text_en'=>'required',
        'title_en'=>'required',
        'text_ru'=>'required',
        'title_ru'=>'required',
        'icon'=>'required',
    ]);
    $ne=new Eduhub_nega_en();
    $nr=new Eduhub_nega_ru();
    $nu=new Eduhub_nega_uz();

    $nu->text=$data['text_uz'];
    $nu->title=$data['title_uz'];
    $nu->icon=$data['icon'];
    $ne->text=$data['text_en'];
    $ne->title=$data['title_en'];
    $ne->icon=$data['icon'];
    $nr->text=$data['text_ru'];
    $nr->title=$data['title_ru'];
    $nr->icon=$data['icon'];
    $nu->save();
    $nr->save();
    $ne->save();
    return redirect('/admin/negaEduHub');

}
public function nega_dell( $id){
    $cu=Eduhub_nega_uz::findOrFail($id);
    $cr=Eduhub_nega_ru::findOrFail($id);
    $ce=Eduhub_nega_en::findOrFail($id);
   $ce->delete();
   $cu->delete();
   $cr->delete();
   return redirect('/admin/negaEduHub');
}
public function nega_updete(Request $req, $id){
    $data=$req->validate([
        'text_uz'=>'required',
        'title_uz'=>'required',
        'text_en'=>'required',
        'title_en'=>'required',
        'text_ru'=>'required',
        'title_ru'=>'required',
        'icon'=>'required',
    ]);
    $ne=Eduhub_nega_en::find($id);
    $nr=Eduhub_nega_ru::find($id);
    $nu=Eduhub_nega_uz::find($id);

    $nu->text=$data['title_uz'];
    $nu->title=$data['title_uz'];
    $nu->icon=$data['icon'];
    $ne->text=$data['title_en'];
    $ne->title=$data['title_en'];
    $ne->icon=$data['icon'];
    $nr->text=$data['title_ru'];
    $nr->title=$data['title_ru'];
    $nr->icon=$data['icon'];
    $nu->save();
    $nr->save();
    $ne->save();
    return redirect('/admin/negaEduHub');

}
/*Category
*/
    public function category(){
        $t = app()->getLocale('lang');
        $cat=DB::select('select * from category_' . $t . 's ');
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
