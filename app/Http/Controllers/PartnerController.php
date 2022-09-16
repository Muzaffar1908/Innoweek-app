<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Symfony\Component\HttpKernel\Event\ViewEvent;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::paginate(5);
        return view('admin.partner.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partner.create');
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
            'image' => 'required',
            'image_url' => 'required',
        );

        if (!file_exists('upload/partners')) {
            mkdir('upload/partners', 0777, true);
        }


        $validator = Validator::make($data, $rule);

        if ($validator->fails()) {
            Session::flash('warning', $validator->messages());
            return redirect()->back();
        }

        $inputs = $request->all();
        if (!empty($inputs['id'])) {
            $partners = Partner::findOrFail($inputs['id']);
        } else {
            $partners = new Partner();
        }

        $image = $request->file('image');
        if ($image) {
            $tmpFilePath = 'upload/partners/';
            $hardPath = Str::slug('partners', '-') . '-' . '-' . md5(time());
//            $img = Image::make($image);
            $img1 = Image::make($image);
            $img1->save($tmpFilePath . $hardPath . '-d.png');
            $partners->image = $hardPath;
        }

        $partners->image_url = $inputs['image_url']; 
        $partners->save();

        if (!empty($inputs['id'])) {
            Session::flash('warning', __('ALL_CHANGES_SUCCESSFUL_SAVED'));
            return redirect('admin/partner');
        } else {
            Session::flash('warning', __('ALL_SUCCESSFUL_SAVED'));
            return redirect('admin/partner');
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
        $partners = Partner::find($id);
        return view('admin.partner.edit')->with('partners', $partners);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partners)
    {
        $data = $request->except(array('_token'));
        $rule = array(
            'image' => 'required',
            'image_url' => 'required',
        );

        if (!file_exists('upload/partners')) {
            mkdir('upload/partners', 0777, true);
        }


        $validator = Validator::make($data, $rule);

        if ($validator->fails()) {
            Session::flash('warning', $validator->messages());
            return redirect()->back();
        }

        $inputs = $request->all();
        if (!empty($inputs['id'])) {
            $partners = Partner::findOrFail($inputs['id']);
        } else {
            $partners = new Partner();
        }

        $image = $request->file('image');
        if ($image) {
            $tmpFilePath = 'upload/partners/';
            $hardPath = Str::slug('partners', '-') . '-' . '-' . md5(time());
//            $img = Image::make($image);
            $img1 = Image::make($image);
            $img1->save($tmpFilePath . $hardPath . '-d.png');
            $partners->image = $hardPath;
        }

        $partners->image_url = $inputs['image_url']; 
        $partners->save();

        if (!empty($inputs['id'])) {
            Session::flash('warning', __('ALL_CHANGES_SUCCESSFUL_SAVED'));
            return redirect('admin/partner');
        } else {
            Session::flash('warning', __('ALL_SUCCESSFUL_SAVED'));
            return redirect('admin/partner');
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
        $partners = Partner::findOrFail($id);
        $image_path = public_path() . '/upload/partners/' . $partners->image . '-d.png';
        unlink($image_path);
        $partners->delete();
        return redirect('admin/partners')->with('warning', 'NEWS TABLES DELETED');
    }
}
