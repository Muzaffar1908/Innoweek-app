<?php

namespace App\Http\Controllers;

use App\Models\Archive\Archive;
use App\Models\News\Galeries;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use imagine\Image\Box;
use imagine;
use Illuminate\Support\Facades\Session;


class GaleriesController extends Controller
{
    public function index()
    {
        $galeries = Galeries::paginate(5);
        $users = User::all();
        $archives = Archive::all();
        return view('admin.galeries.index', ['galeries' => $galeries, 'users' => $users, 'archives' => $archives]);
    }

    public function is_active($id){
        $change=Galeries::find($id);
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
        return view('admin.galeries.create', [
            'users' => $users,
            'archives' => $archives,
        ]);
    }

    public function testStore(Request $request)
    {
        $imagine = new \Imagine\Gd\Imagine();
        $image = $imagine->open('C:\Users\oktam\Downloads\Telegram Desktop\1.png');
        $thumbnail = $image->thumbnail(new \Imagine\Image\Box(450, 250));
        $thumbnail->save('C:\Users\oktam\Downloads\Telegram Desktop\example.1.png');
        return redirect()->back();
        // $img = Image::make('C:\Users\oktam\Downloads\Telegram Desktop\113Fon uchun.jpg')->resize(180);
        // $img->save('C:\Users\oktam\Downloads\Telegram Desktop\d-d.png');
        // return redirect()->back();
    }

    public function store(Request $request)
    {
        $data = $request->except(array('_token'));
        $rule = array(
            'image' => 'required',
        );

        $validator = Validator::make($data, $rule);
        if ($validator->fails()) {
            Session::flash('warning', $validator->messages());
            return redirect()->back();
        }

        $inputs = $request->all();
        if (!empty($inputs['id'])) {
            $galeries = galeries::findOrFail($inputs['id']);
        } else {
            $galeries = new Galeries();
        }

        $image = $request->file('image');
        if ($image) {
            $tmpFilePath = 'upload/gallery/';
            $hardPath = Str::slug('gallery_', '-') . '-' . '-' . md5(time());
            $imagine = new \Imagine\Gd\Imagine();
            $image = $imagine->open($image);
            $thumbnail = $image->thumbnail(new \Imagine\Image\Box(450, 250));
            $thumbnail->save($tmpFilePath . $hardPath . '_thumbnail_450.png');
            $bigImg = $image->thumbnail(new \Imagine\Image\Box(1920, 1080));
            $bigImg->save($tmpFilePath . $hardPath . '_big_1920.png');
            // $img1 = Image::make($image);
            // $img1->save($tmpFilePath . $hardPath . '-d.png');
            $galeries->image = $hardPath;
        }

        $galeries->user_id = $inputs['user_id'];
        $galeries->archive_id = $inputs['archive_id'];
        $galeries->save();

        if (!empty($inputs['id'])) {
            Session::flash('warning', __('ALL_CHANGES_SUCCESSFUL_SAVED'));
            return redirect()->back();
        } else {
            Session::flash('warning', __('ALL_SUCCESSFUL_SAVED'));
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $galeries = Galeries::find($id);
        $users = User::all();
        $archives = Archive::all();
        return view('admin.galeries.edit', [
            'galeries' => $galeries,
            'users' => $users,
            'archives' => $archives,

        ]);
    }

    public function update(Request $request, Galeries $galery)
    {
        $data = $request->except(array('_token'));
        $rule = array(
            'image' => 'required',
        );

        if (!file_exists('upload/galeries')) {
            mkdir('upload/galeries', 0777, true);
        }


        $validator = Validator::make($data, $rule);

        if ($validator->fails()) {
            Session::flash('warning', $validator->messages());
            return redirect()->back();
        }

        $inputs = $request->all();
        if (!empty($inputs['id'])) {
            $galeries = galeries::findOrFail($inputs['id']);
        } else {
            $galeries = new Galeries();
        }

        $del_img = $galeries->image;

        $image = $request->file('image');
        if ($image) {
            $tmpFilePath = 'upload/galeries/';
            $hardPath = Str::slug('galeries', '-') . '-' . '-' . md5(time());
//            $img = Image::make($image);
            $img1 = Image::make($image);
            $img1->save($tmpFilePath . $hardPath . '-d.png');
            $galeries->image = $hardPath;
            $image_path = public_path() . '/upload/galeries/' . $del_img . '-d.png';
            // unlink($image_path);
        }

        $galeries->user_id = $inputs['user_id'];
        $galeries->archive_id = $inputs['archive_id'];
        $galeries->save();

        if (!empty($inputs['id'])) {
            Session::flash('warning', __('ALL_CHANGES_SUCCESSFUL_SAVED'));
            return redirect('admin/galeries');
        } else {
            Session::flash('warning', __('ALL_SUCCESSFUL_SAVED'));
            return redirect('admin/galeries');
        }
    }


    public function destroy($id)
    {
        $galeries = Galeries::findOrFail($id);
        $image_path = public_path() . '/upload/galeries/' . $galeries->image . '-d.png';
        unlink($image_path);
        $galeries->delete();
        return redirect('admin/galeries')->with('warning', 'NEWS TABLES DELETED');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */

}
