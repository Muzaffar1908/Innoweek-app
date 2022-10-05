<?php

namespace App\Http\Controllers;

use App\Models\Live360;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class Live360Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $live360s = Live360::paginate(5);
        return view('admin.live360.index', compact('live360s'));
    }

    public function is_active($id){
        $change=Live360::find($id);
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
        return view('admin.live360.create');
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
           'youtobe_id_1' => 'required',
        );

        $validator = Validator::make($data, $rule);

        if ($validator->fails()) {
            Session::flash('warning', $validator->messages());
            return redirect()->back();
        }

        $inputs = $request->all();
        if (!empty($inputs['id'])) {
           $live360s = Live360::findOrFail($inputs['id']);
        } else {
           $live360s = new Live360();
        }

        $live360s->youtobe_id_1 = $inputs['youtobe_id_1'];
        $live360s->youtobe_id_2 = $inputs['youtobe_id_2'];
        $live360s->youtobe_id_3 = $inputs['youtobe_id_3'];
        $live360s->youtobe_id_4 = $inputs['youtobe_id_4'];
        $live360s->save();

        if (!empty($inputs['id'])) {
            Session::flash('warning', __('ALL_CHANGES_SUCCESSFUL_SAVED'));
            return redirect('admin/live360');
        } else {
            Session::flash('warning', __('ALL_SUCCESSFUL_SAVED'));
            return redirect('admin/live360');
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
        $live360s = Live360::find($id);
        return view('admin.live360.edit', [
            'live360s' => $live360s,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Live360 $live360s)
    {
        $data = $request->except(array('_token'));
        $rule = array(
           'youtobe_id_1' => 'required',
        );

        $validator = Validator::make($data, $rule);

        if ($validator->fails()) {
            Session::flash('warning', $validator->messages());
            return redirect()->back();
        }

        $inputs = $request->all();
        if (!empty($inputs['id'])) {
           $live360s = Live360::findOrFail($inputs['id']);
        } else {
           $live360s = new Live360();
        }

        $live360s->youtobe_id_1 = $inputs['youtobe_id_1'];
        $live360s->youtobe_id_2 = $inputs['youtobe_id_2'];
        $live360s->youtobe_id_3 = $inputs['youtobe_id_3'];
        $live360s->youtobe_id_4 = $inputs['youtobe_id_4'];
        $live360s->save();

        if (!empty($inputs['id'])) {
            Session::flash('warning', __('ALL_CHANGES_SUCCESSFUL_SAVED'));
            return redirect('admin/live360');
        } else {
            Session::flash('warning', __('ALL_SUCCESSFUL_SAVED'));
            return redirect('admin/live360');
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
        $live360s = Live360::findOrFail($id);
        $live360s->delete();
        return redirect('admin/live360')->with('warning', 'LIVE 360 TABLES DELETED');
    }
}
