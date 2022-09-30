<?php

namespace App\Http\Controllers;

use App\Models\LiveStatistic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;


class LiveStatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $live_statistics = LiveStatistic::paginate(5);
        return view('admin.live_statistic.index', compact('live_statistics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.live_statistic.create');
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
            'titlenumber_1' => 'required',
            'countryname_1' => 'required',
            'countryson_1' => 'required',
            'forum_1' => 'required',
            'yarmarka_1' => 'required',
        );

        $validator = Validator::make($data, $rule);

        if ($validator->fails()) {
            Session::flash('warning', $validator->messages());
            return redirect()->back();
        }

        $inputs = $request->all();
        if (!empty($inputs['id'])) {
            $live_statistics = LiveStatistic::findOrFail($inputs['id']);
        } else {
            $live_statistics = new LiveStatistic();
        }

        $live_statistics->titlenumber_1 = $inputs['titlenumber_1'];
        $live_statistics->titlenumber_2 = $inputs['titlenumber_2'];
        $live_statistics->titlenumber_3 = $inputs['titlenumber_3'];
        $live_statistics->countryname_1 = $inputs['countryname_1'];
        $live_statistics->countryname_2 = $inputs['countryname_2'];
        $live_statistics->countryname_3 = $inputs['countryname_3'];
        $live_statistics->countryname_4 = $inputs['countryname_4'];
        $live_statistics->countryname_5 = $inputs['countryname_5'];
        $live_statistics->countryname_all = $inputs['countryname_all'];
        $live_statistics->countryson_1 = $inputs['countryson_1'];
        $live_statistics->countryson_2 = $inputs['countryson_2'];
        $live_statistics->countryson_3 = $inputs['countryson_3'];
        $live_statistics->countryson_4 = $inputs['countryson_4'];
        $live_statistics->countryson_5 = $inputs['countryson_5'];
        $live_statistics->countryson_all = $inputs['countryson_all'];
        $live_statistics->titlenumber_4 = $inputs['titlenumber_4'];
        $live_statistics->titlenumber_5 = $inputs['titlenumber_5'];
        $live_statistics->titlenumber_6 = $inputs['titlenumber_6'];
        $live_statistics->forum_1 = $inputs['forum_1'];
        $live_statistics->forum_2 = $inputs['forum_2'];
        $live_statistics->forum_3 = $inputs['forum_3'];
        $live_statistics->yarmarka_1 = $inputs['yarmarka_1'];
        $live_statistics->yarmarka_2 = $inputs['yarmarka_2'];
        $live_statistics->yarmarka_3 = $inputs['yarmarka_3'];

        $live_statistics->save();

        if (!empty($inputs['id'])) {
            Session::flash('warning', __('ALL_CHANGES_SUCCESSFUL_SAVED'));
            return redirect('admin/live_statistic');
        } else {
            Session::flash('warning', __('ALL_SUCCESSFUL_SAVED'));
            return redirect('admin/live_statistic');
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
        $live_statistics = LiveStatistic::find($id);
        return view('admin.live_statistic.edit', [
        
            'live_statistic' => $live_statistics

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LiveStatistic $live_statistics)
    {
        $data = $request->except(array('_token'));
        $rule = array(
            'titlenumber_1' => 'required',
            'countryname_1' => 'required',
            'countryson_1' => 'required',
            'forum_1' => 'required',
            'yarmarka_1' => 'required',
        );

        $validator = Validator::make($data, $rule);

        if ($validator->fails()) {
            Session::flash('warning', $validator->messages());
            return redirect()->back();
        }

        $inputs = $request->all();
        if (!empty($inputs['id'])) {
            $live_statistics = LiveStatistic::findOrFail($inputs['id']);
        } else {
            $live_statistics = new LiveStatistic();
        }

        $live_statistics->titlenumber_1 = $inputs['titlenumber_1'];
        $live_statistics->titlenumber_2 = $inputs['titlenumber_2'];
        $live_statistics->titlenumber_3 = $inputs['titlenumber_3'];
        $live_statistics->countryname_1 = $inputs['countryname_1'];
        $live_statistics->countryname_2 = $inputs['countryname_2'];
        $live_statistics->countryname_3 = $inputs['countryname_3'];
        $live_statistics->countryname_4 = $inputs['countryname_4'];
        $live_statistics->countryname_5 = $inputs['countryname_5'];
        $live_statistics->countryname_all = $inputs['countryname_all'];
        $live_statistics->countryson_1 = $inputs['countryson_1'];
        $live_statistics->countryson_2 = $inputs['countryson_2'];
        $live_statistics->countryson_3 = $inputs['countryson_3'];
        $live_statistics->countryson_4 = $inputs['countryson_4'];
        $live_statistics->countryson_5 = $inputs['countryson_5'];
        $live_statistics->countryson_all = $inputs['countryson_all'];
        $live_statistics->titlenumber_4 = $inputs['titlenumber_4'];
        $live_statistics->titlenumber_5 = $inputs['titlenumber_5'];
        $live_statistics->titlenumber_6 = $inputs['titlenumber_6'];
        $live_statistics->forum_1 = $inputs['forum_1'];
        $live_statistics->forum_2 = $inputs['forum_2'];
        $live_statistics->forum_3 = $inputs['forum_3'];
        $live_statistics->yarmarka_1 = $inputs['yarmarka_1'];
        $live_statistics->yarmarka_2 = $inputs['yarmarka_2'];
        $live_statistics->yarmarka_3 = $inputs['yarmarka_3'];

        $live_statistics->save();

        if (!empty($inputs['id'])) {
            Session::flash('warning', __('ALL_CHANGES_SUCCESSFUL_SAVED'));
            return redirect('admin/live_statistic');
        } else {
            Session::flash('warning', __('ALL_SUCCESSFUL_SAVED'));
            return redirect('admin/live_statistic');
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
        $live_statistics = LiveStatistic::findOrFail($id);
        $live_statistics->delete();
        return redirect('admin/live_statistic')->with('warning', 'Live Statistic TABLES DELETED');
    }
}
