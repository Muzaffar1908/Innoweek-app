<?php

namespace App\Http\Controllers;

use App\Models\Archive\Archive;
use App\Models\Conference;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;

class ConferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $lang = \App::getLocale();
        $search = [
            ['id', '!=', null]
        ];
        switch ($req) {
            case $req->started_at != null:
                $search[] = [DB::raw("DATE(started_at)"), '=', Carbon::parse($req->started_at)];
                break;
            case $req->title != null:
                $search[] = ['title_uz', '=', $req->title];
                break;
        }
        $conferences = Conference::select('id', 'title_uz', 'started_at', 'stoped_at', 'archive_id', 'user_id', 'user_image', 'is_active')->where($search)->orderBy('id', 'desc')->paginate(15);
        $users = User::select('id', 'first_name')->get();
        $archives = Archive::select('id', 'year');
        return view('admin.conference.index', compact('conferences', 'users', 'archives'));
    }

    public function is_active($id)
    {
        $update = Conference::find($id);
        $archive = Archive::find($update->archive_id);
        if ($archive->is_active == 1) {
            if ($update->is_active == 1) {
                $update->is_active = 0;
            } else {
                $update->is_active = 1;
            }
            $update->save();
        }
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
        return view('admin.conference.create', [
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
            'title_uz' => 'required',
        );

        $validator = Validator::make($data, $rule);

        if ($validator->fails()) {
            Session::flash('warning', $validator->messages());
            return redirect()->back();
        }

        $inputs = $request->all();
        if (!empty($inputs['id'])) {
            $conferences = Conference::findOrFail($inputs['id']);
        } else {
            $conferences = new Conference;
        }

        $image = $request->file('user_image');
        if ($image) {
            $tmpFilePath = 'upload/conference/';
            $hardPath =  Str::slug('conference', '-') . '-' . md5(time());
            $imagine = new \Imagine\Gd\Imagine();
            $image = $imagine->open($image);
            $thumbnail = $image->thumbnail(new \Imagine\Image\Box(267, 267));
            $thumbnail->save($tmpFilePath . $hardPath . '_thumbnail_267.png');
            $conferences->user_image = $hardPath;
        }

        $conferences->user_id = $inputs['user_id'];
        $conferences->archive_id = $inputs['archive_id'];
        $conferences->started_at = $inputs['started_at'];
        $conferences->stoped_at = $inputs['stoped_at'];
        $conferences->title_uz = $inputs['title_uz'];
        $conferences->title_ru = $inputs['title_ru'];
        $conferences->title_en = $inputs['title_en'];
        $conferences->live_url = $inputs['live_url'];
        // $conferences->innoweek_video = $inputs['innoweek_video'];
        $conferences->address_uz = $inputs['address_uz'];
        $conferences->address_ru = $inputs['address_ru'];
        $conferences->address_en = $inputs['address_en'];

        $conferences->description_uz = $inputs['description_uz'];
        if (!empty($conferences->description_uz)) {
            $dom_save_uz = new \DomDocument();
            libxml_use_internal_errors(true);
            $dom_save_uz->loadHtml('<?xml encoding="UTF-8">' . $conferences->description_uz, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $dom_image_save_uz = $dom_save_uz->getElementsByTagName('img');
            foreach ($dom_image_save_uz as $k => $img) {
                $data = $img->getAttribute('src');
                if (preg_match('/data:image/', $data)) {
                    list($type, $data) = explode(';', $data);
                    list(, $data)      = explode(',', $data);
                    $data = base64_decode($data);
                    $image_name = "/upload/description/description_image/uz_" . time() . $k . '.jpg';
                    $path = public_path() . $image_name;
                    file_put_contents($path, $data);
                    $imagine = new \Imagine\Gd\Imagine();
                    $image = $imagine->open($path);
                    $bigImg = $image->thumbnail(new \Imagine\Image\Box(560, 420));
                    $bigImg->save($path);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $image_name);
                }
            }

            $conferences->description_uz = str_replace('<?xml encoding="UTF-8">', "", $dom_save_uz->saveHTML((new \DOMXPath($dom_save_uz))->query('/')->item(0)));
        }

        $conferences->description_ru = $inputs['description_ru'];
        if (!empty($conferences->description_ru)) {
            $dom_save_ru = new \DomDocument();
            libxml_use_internal_errors(true);
            $dom_save_ru->loadHtml('<?xml encoding="UTF-8">' . $conferences->description_ru, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $dom_image_save_ru = $dom_save_ru->getElementsByTagName('img');
            foreach ($dom_image_save_ru as $k => $img) {
                $data = $img->getAttribute('src');
                if (preg_match('/data:image/', $data)) {
                    list($type, $data) = explode(';', $data);
                    list(, $data)      = explode(',', $data);
                    $data = base64_decode($data);
                    $image_name = "/upload/description/description_image/ru_" . time() . $k . '.jpg';
                    $path = public_path() . $image_name;
                    file_put_contents($path, $data);
                    $imagine = new \Imagine\Gd\Imagine();
                    $image = $imagine->open($path);
                    $bigImg = $image->thumbnail(new \Imagine\Image\Box(560, 420));
                    $bigImg->save($path);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $image_name);
                }
            }

            $conferences->description_ru = str_replace('<?xml encoding="UTF-8">', "", $dom_save_ru->saveHTML((new \DOMXPath($dom_save_ru))->query('/')->item(0)));
        }

        $conferences->description_en = $inputs['description_en'];
        if (!empty($conferences->description_en)) {
            $dom_save_en = new \DomDocument();
            libxml_use_internal_errors(true);
            $dom_save_en->loadHtml('<?xml encoding="UTF-8">' . $conferences->description_en, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            //$dom_save_en->loadHTML($conferences->description_en);
            $dom_image_save_en = $dom_save_en->getElementsByTagName('img');
            foreach ($dom_image_save_en as $k => $img) {
                $data = $img->getAttribute('src');
                if (preg_match('/data:image/', $data)) {
                    list($type, $data) = explode(';', $data);
                    list(, $data)      = explode(',', $data);
                    $data = base64_decode($data);
                    $image_name = "/upload/description/description_image/en_" . time() . $k . '.jpg';
                    $path = public_path() . $image_name;
                    file_put_contents($path, $data);
                    $imagine = new \Imagine\Gd\Imagine();
                    $image = $imagine->open($path);
                    $bigImg = $image->thumbnail(new \Imagine\Image\Box(560, 420));
                    $bigImg->save($path);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $image_name);
                }
            }

            $conferences->description_en = str_replace('<?xml encoding="UTF-8">', "", $dom_save_en->saveHTML((new \DOMXPath($dom_save_en))->query('/')->item(0)));
        }

        $conferences->save();

        if (!empty($inputs['id'])) {
            Session::flash('warning', __('ALL_CHANGES_SUCCESSFUL_SAVED'));
            return redirect('admin/conference');
        } else {
            Session::flash('warning', __('ALL_SUCCESSFUL_SAVED'));
            return redirect('admin/conference');
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
        $conference = Conference::find($id);
        $users = User::all();
        $archive = Archive::all();
        return view('admin.conference.show', [
            'conference' => $conference,
            'users' => $users,
            'archive' => $archive,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $conference = Conference::find($id);
        $users = User::all();
        $archives = Archive::all();
        return view('admin.conference.edit', [
            'conference' => $conference,
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
    public function update(Request $request, Conference $conferences)
    {
        $data = $request->except(array('_token'));
        $rule = array(
            'title_uz' => 'required',
        );

        $validator = Validator::make($data, $rule);

        if ($validator->fails()) {
            Session::flash('warning', $validator->messages());
            return redirect()->back();
        }

        $inputs = $request->all();
        if (!empty($inputs['id'])) {
            $conferences = Conference::findOrFail($inputs['id']);
        } else {
            $conferences = new Conference;
        }

        $image = $request->file('user_image');
        if ($image) {
            $tmpFilePath = 'upload/conference/';
            $hardPath =  Str::slug('conference', '-') . '-' . md5(time());
            $imagine = new \Imagine\Gd\Imagine();
            $image = $imagine->open($image);
            $thumbnail = $image->thumbnail(new \Imagine\Image\Box(267, 267));
            $thumbnail->save($tmpFilePath . $hardPath . '_thumbnail_267.png');
            $conferences->user_image = $hardPath;
        }

        $conferences->user_id = $inputs['user_id'];
        $conferences->archive_id = $inputs['archive_id'];
        $conferences->started_at = $inputs['started_at'];
        $conferences->stoped_at = $inputs['stoped_at'];
        $conferences->title_uz = $inputs['title_uz'];
        $conferences->title_ru = $inputs['title_ru'];
        $conferences->title_en = $inputs['title_en'];
        $conferences->live_url = $inputs['live_url'];
        // $conferences->innoweek_video = $inputs['innoweek_video'];
        $conferences->address_uz = $inputs['address_uz'];
        $conferences->address_ru = $inputs['address_ru'];
        $conferences->address_en = $inputs['address_en'];

        $conferences->description_uz = $inputs['description_uz'];

        if (!empty($conferences->description_uz)) {
            $dom_save_uz = new \DomDocument();
            libxml_use_internal_errors(true);
            $dom_save_uz->loadHtml('<?xml encoding="UTF-8">' . $conferences->description_uz, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $dom_image_save_uz = $dom_save_uz->getElementsByTagName('img');
            foreach ($dom_image_save_uz as $k => $img) {
                $data = $img->getAttribute('src');
                if (preg_match('/data:image/', $data)) {
                    list($type, $data) = explode(';', $data);
                    list(, $data)      = explode(',', $data);
                    $data = base64_decode($data);
                    $image_name = "/upload/description/description_image/uz_" . time() . $k . '.jpg';
                    $path = public_path() . $image_name;
                    file_put_contents($path, $data);
                    $imagine = new \Imagine\Gd\Imagine();
                    $image = $imagine->open($path);
                    $bigImg = $image->thumbnail(new \Imagine\Image\Box(560, 420));
                    $bigImg->save($path);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $image_name);
                }
            }

            $conferences->description_uz = str_replace('<?xml encoding="UTF-8">', "", $dom_save_uz->saveHTML((new \DOMXPath($dom_save_uz))->query('/')->item(0)));
        }

        $conferences->description_ru = $inputs['description_ru'];
        if (!empty($conferences->description_ru)) {
            $dom_save_ru = new \DomDocument();
            libxml_use_internal_errors(true);
            $dom_save_ru->loadHtml('<?xml encoding="UTF-8">' . $conferences->description_ru, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $dom_image_save_ru = $dom_save_ru->getElementsByTagName('img');
            foreach ($dom_image_save_ru as $k => $img) {
                $data = $img->getAttribute('src');
                if (preg_match('/data:image/', $data)) {
                    list($type, $data) = explode(';', $data);
                    list(, $data)      = explode(',', $data);
                    $data = base64_decode($data);
                    $image_name = "/upload/description/description_image/ru_" . time() . $k . '.jpg';
                    $path = public_path() . $image_name;
                    file_put_contents($path, $data);
                    $imagine = new \Imagine\Gd\Imagine();
                    $image = $imagine->open($path);
                    $bigImg = $image->thumbnail(new \Imagine\Image\Box(560, 420));
                    $bigImg->save($path);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $image_name);
                }
            }

            $conferences->description_ru = str_replace('<?xml encoding="UTF-8">', "", $dom_save_ru->saveHTML((new \DOMXPath($dom_save_ru))->query('/')->item(0)));
        }

        $conferences->description_en = $inputs['description_en'];
        if (!empty($conferences->description_en)) {
            $dom_save_en = new \DomDocument();
            libxml_use_internal_errors(true);
            $dom_save_en->loadHtml('<?xml encoding="UTF-8">' . $conferences->description_en, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            //$dom_save_en->loadHTML($conferences->description_en);
            $dom_image_save_en = $dom_save_en->getElementsByTagName('img');
            foreach ($dom_image_save_en as $k => $img) {
                $data = $img->getAttribute('src');
                if (preg_match('/data:image/', $data)) {
                    list($type, $data) = explode(';', $data);
                    list(, $data)      = explode(',', $data);
                    $data = base64_decode($data);
                    $image_name = "/upload/description/description_image/en_" . time() . $k . '.jpg';
                    $path = public_path() . $image_name;
                    file_put_contents($path, $data);
                    $imagine = new \Imagine\Gd\Imagine();
                    $image = $imagine->open($path);
                    $bigImg = $image->thumbnail(new \Imagine\Image\Box(560, 420));
                    $bigImg->save($path);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $image_name);
                }
            }

            $conferences->description_en = str_replace('<?xml encoding="UTF-8">', "", $dom_save_en->saveHTML((new \DOMXPath($dom_save_en))->query('/')->item(0)));
        }

        $conferences->save();

        if (!empty($inputs['id'])) {
            Session::flash('warning', __('ALL_CHANGES_SUCCESSFUL_SAVED'));
            return redirect('admin/conference');
        } else {
            Session::flash('warning', __('ALL_SUCCESSFUL_SAVED'));
            return redirect('admin/conference');
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
        Conference::destroy($id);
        return redirect('admin/conference')->with('warning', 'CONFERENCE DELETED');
    }
}
