<?php

namespace App\Http\Controllers;

use App\Models\PushNotification;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PushNotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $push_notifications = PushNotification::orderBy('id', 'desc')->paginate(5);
        return view('admin.push_notification.index', [
          'push_notifications' => $push_notifications,
        ]);
    }

    public function is_active($id){
        $change=PushNotification::find($id);
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
        return view('admin.push_notification.create', compact('users'));
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
           'text_uz' => 'required',
        );

        if (!file_exists('upload/push_notification')) {
            mkdir('upload/push_notification', 0777, true);
        }


        $validator = Validator::make($data, $rule);

        if ($validator->fails()) {
            Session::flash('warning', $validator->messages());
            return redirect()->back();
        }

        $inputs = $request->all();
        if (!empty($inputs['id'])) {
           $push_notifications = PushNotification::findOrFail($inputs['id']);
        } else {
           $push_notifications = new PushNotification();
        }

        $image = $request->file('image');
        if ($image) {
            $tmpFilePath = 'upload/push_notification/';
            $hardPath = Str::slug('push_notification_', '-') . '-' . '-' . md5(time());
            $imagine = new \Imagine\Gd\Imagine();
            $image = $imagine->open($image);
            $thumbnail = $image->thumbnail(new \Imagine\Image\Box(130, 112));
            $thumbnail->save($tmpFilePath . $hardPath . '_thumbnail_130.png');
           $push_notifications->image = $hardPath;
        }

        $push_notifications->text_uz = $inputs['text_uz'];
        $push_notifications->text_ru = $inputs['text_ru'];
        $push_notifications->text_en = $inputs['text_en'];
        $push_notifications->save();

        if (!empty($inputs['id'])) {
            Session::flash('warning', __('ALL_CHANGES_SUCCESSFUL_SAVED'));
            return redirect('admin/push_notification');
        } else {
            Session::flash('warning', __('ALL_SUCCESSFUL_SAVED'));
            return redirect('admin/push_notification');
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
        $push_notifications = PushNotification::find($id);
        return view('admin.push_notification.edit', [
            'push_notifications' => $push_notifications,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PushNotification $push_notifications)
    {
        $data = $request->except(array('_token'));
        $rule = array(
           'text_uz' => 'required',
        );

        if (!file_exists('upload/push_notification')) {
            mkdir('upload/push_notification', 0777, true);
        }


        $validator = Validator::make($data, $rule);

        if ($validator->fails()) {
            Session::flash('warning', $validator->messages());
            return redirect()->back();
        }

        $inputs = $request->all();
        if (!empty($inputs['id'])) {
           $push_notifications = PushNotification::findOrFail($inputs['id']);
        } else {
           $push_notifications = new PushNotification();
        }

        $image = $request->file('image');
        if ($image) {
            $tmpFilePath = 'upload/push_notification/';
            $hardPath = Str::slug('push_notification_', '-') . '-' . '-' . md5(time());
            $imagine = new \Imagine\Gd\Imagine();
            $image = $imagine->open($image);
            $thumbnail = $image->thumbnail(new \Imagine\Image\Box(130, 112));
            $thumbnail->save($tmpFilePath . $hardPath . '_thumbnail_130.png');
           $push_notifications->image = $hardPath;
        }

        $push_notifications->text_uz = $inputs['text_uz'];
        $push_notifications->text_ru = $inputs['text_ru'];
        $push_notifications->text_en = $inputs['text_en'];
        $push_notifications->save();

        if (!empty($inputs['id'])) {
            Session::flash('warning', __('ALL_CHANGES_SUCCESSFUL_SAVED'));
            return redirect('admin/push_notification');
        } else {
            Session::flash('warning', __('ALL_SUCCESSFUL_SAVED'));
            return redirect('admin/push_notification');
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
        $push_notifications = PushNotification::findOrFail($id);
        // $image_path = public_path() . '/upload/partners/' . $partners->image . '-d.png';
        // unlink($image_path);
        $push_notifications->delete();
        return redirect('admin/push_notification')->with('warning', 'PUSH NOTIFICATION TABLES DELETED');
    }
}
