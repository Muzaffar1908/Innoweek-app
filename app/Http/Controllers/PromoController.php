<?php

namespace App\Http\Controllers;

use App\Models\Archive\Archive;
use App\Models\Promo;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class PromoController extends Controller
{
    public function index()
    {
        $promo = Promo::select('id', 'user_id', 'archive_id', 'url_uz', 'promo_date_uz', 'is_active', 'created_at')->orderBy('created_at','desc')->paginate(20);
        $users = User::all();
        $archives = Archive::all();
        return view('admin.promo.index', ['promo' => $promo, 'users' => $users, 'archives' => $archives]);
    }

    public function is_active($id){
        $change=Promo::find($id);
        if($change->is_active==1){
            $change->is_active=0;
        }else{
            $change->is_active=1;
        }
        $change->save();
        return redirect()->back();
    }

    public function create()
    {
        $users = User::all();
        $archives = Archive::all();
        return view('admin.promo.create', [
            'users' => $users,
            'archives' => $archives,
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->except(array('_token'));
        $rule = array(
            'url_uz' => 'required',
        );

        $validator = Validator::make($data, $rule);

        if ($validator->fails()) {
            Session::flash('warning', $validator->messages());
            return redirect()->back();
        }

        $inputs = $request->all();
        if (!empty($inputs['id'])) {
            $promo = Promo::findOrFail($inputs['id']);
        } else {
            $promo = new Promo();
        }

        $promo->user_id = $inputs['user_id'];
        $promo->archive_id = $inputs['archive_id'];
        $promo->url_uz = $inputs['url_uz'];
        $promo->url_ru = $inputs['url_ru'];
        $promo->url_en = $inputs['url_en'];
        $promo->promo_date_uz = $inputs['promo_date_uz'];
        $promo->promo_date_ru = $inputs['promo_date_ru'];
        $promo->promo_date_en = $inputs['promo_date_en'];
        $promo->save();

        if (!empty($inputs['id'])) {
            Session::flash('warning', __('ALL_CHANGES_SUCCESSFUL_SAVED'));
            return redirect('admin/promo');
        } else {
            Session::flash('warning', __('ALL_SUCCESSFUL_SAVED'));
            return redirect('admin/promo');
        }
    }

    public function edit($id)
    {
        $promo = Promo::find($id);
        $users = User::all();
        $archives = Archive::all();
        return view('admin.promo.edit', [
            'promo' => $promo,
            'users' => $users,
            'archives' => $archives,

        ]);
    }

    public function update(Request $request, Promo $promo)
    {
        $data = $request->except(array('_token'));
        $rule = array(
            'url_uz' => 'required',
        );


        $validator = Validator::make($data, $rule);

        if ($validator->fails()) {
            Session::flash('warning', $validator->messages());
            return redirect()->back();
        }

        $inputs = $request->all();
        if (!empty($inputs['id'])) {
            $promo = Promo::findOrFail($inputs['id']);
        } else {
            $promo = new Promo();
        }

        $promo->user_id = $inputs['user_id'];
        $promo->archive_id = $inputs['archive_id'];
        $promo->url_uz = $inputs['url_uz'];
        $promo->url_ru = $inputs['url_ru'];
        $promo->url_en = $inputs['url_en'];
        $promo->promo_date_uz = $inputs['promo_date_uz'];
        $promo->promo_date_ru = $inputs['promo_date_ru'];
        $promo->promo_date_en = $inputs['promo_date_en'];
        $promo->save();

        if (!empty($inputs['id'])) {
            Session::flash('warning', __('ALL_CHANGES_SUCCESSFUL_SAVED'));
            return redirect('admin/promo');
        } else {
            Session::flash('warning', __('ALL_SUCCESSFUL_SAVED'));
            return redirect('admin/promo');
        }
    }


    public function destroy($id)
    {
        $promo = Promo::findOrFail($id);
        $promo->delete();
        return redirect('admin/promo')->with('warning', 'NEWS TABLES DELETED');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */

}
