<?php

namespace App\Http\Controllers;

use App\Models\Archive\Archive;
use App\Models\Promo2;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;

class Promo2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promo = Promo2::orderBy('id','desc')->paginate(20);
        $users = User::all();
        $archives = Archive::all();
        return view('admin.promo2.index', ['promo' => $promo, 'users' => $users, 'archives' => $archives]);
    }

    public function is_active($id){
        $change=Promo2::find($id);
        if($change->is_active==1){
            $change->is_active=0;
        }else{
            $change->is_active=1;
        }
        $change->save();
        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $archives = Archive::all();
        return view('admin.promo2.create', [
            'users' => $users,
            'archives' => $archives,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except(array('_token'));
        $rule = array(
            'promo_url_uz' => 'required',
        );

        $validator = Validator::make($data, $rule);

        if ($validator->fails()) {
            Session::flash('warning', $validator->messages());
            return redirect()->back();
        }

        $inputs = $request->all();
        if (!empty($inputs['id'])) {
            $promo = Promo2::findOrFail($inputs['id']);
        } else {
            $promo = new Promo2();
        }

        $promo->user_id = $inputs['user_id'];
        $promo->archive_id = $inputs['archive_id'];
        $promo->promo_url_uz = $inputs['promo_url_uz'];
        $promo->promo_url_ru = $inputs['promo_url_ru'];
        $promo->promo_url_en = $inputs['promo_url_en'];
        $promo->save();

        if (!empty($inputs['id'])) {
            Session::flash('warning', __('ALL_CHANGES_SUCCESSFUL_SAVED'));
            return redirect('admin/promo2');
        } else {
            Session::flash('warning', __('ALL_SUCCESSFUL_SAVED'));
            return redirect('admin/promo2');
        }
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
        $promo = Promo2::find($id);
        $users = User::all();
        $archives = Archive::all();
        return view('admin.promo2.edit', [
            'promo' => $promo,
            'users' => $users,
            'archives' => $archives,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Promo2 $promo)
    {
        $data = $request->except(array('_token'));
        $rule = array(
            'promo_url_uz' => 'required',
        );

        $validator = Validator::make($data, $rule);

        if ($validator->fails()) {
            Session::flash('warning', $validator->messages());
            return redirect()->back();
        }

        $inputs = $request->all();
        if (!empty($inputs['id'])) {
            $promo = Promo2::findOrFail($inputs['id']);
        } else {
            $promo = new Promo2();
        }

        $promo->user_id = $inputs['user_id'];
        $promo->archive_id = $inputs['archive_id'];
        $promo->promo_url_uz = $inputs['promo_url_uz'];
        $promo->promo_url_ru = $inputs['promo_url_ru'];
        $promo->promo_url_en = $inputs['promo_url_en'];
        $promo->save();

        if (!empty($inputs['id'])) {
            Session::flash('warning', __('ALL_CHANGES_SUCCESSFUL_SAVED'));
            return redirect('admin/promo2');
        } else {
            Session::flash('warning', __('ALL_SUCCESSFUL_SAVED'));
            return redirect('admin/promo2');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $promo = Promo2::findOrFail($id);
        $promo->delete();
        return redirect('admin/promo2')->with('warning', 'PROMO TABLES DELETED');
    }
}
