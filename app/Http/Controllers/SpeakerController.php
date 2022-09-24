<?php

namespace App\Http\Controllers;



use App\Models\Archive\Archive;
use App\Models\Archive\Speakers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;


class SpeakerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $speakers = Speakers::paginate(5);
        $archives = Archive::all();
        return view('admin.speaker.index', compact('speakers', 'archives'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $archives = Archive::all();
        $users = User::all();
        return view('admin.speaker.create', compact('archives','users'));
    }

    public function is_active($id){
        $update=Speakers::find($id);

        $archive=Archive::find($update->archive_id);
        if($archive->is_active==1){
            if($update->is_active==1){
                $update->is_active=0;
            }else{
                $update->is_active=1;
            }
            $update->save();
        }
        return redirect()->back();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except(array('_token'));
        $rule = array(
            'full_name_uz' => 'required',
            'job_uz' => 'required',
        );

        $validator = Validator::make($data, $rule);

        if ($validator->fails()) {
            Session::flash('warning', $validator->messages());
            return redirect()->back();
        }

        $inputs = $request->all();
        if (!empty($inputs['id'])) {
            $speakers = Speakers::findOrFail($inputs['id']);
        } else {
            $speakers = new Speakers;
        }

        $image = $request->file('image');
        if ($image) {
            $tmpFilePath = 'upload/speaker/';
            $hardPath = Str::slug('speaker_', '-') . '-' . '-' . md5(time());
            $imagine = new \Imagine\Gd\Imagine();
            $image = $imagine->open($image);
            $thumbnail = $image->thumbnail(new \Imagine\Image\Box(267, 267));
            $thumbnail->save($tmpFilePath . $hardPath . '_thumbnail_267.png');
            $BigImage = $image->thumbnail(new \Imagine\Image\Box(1920, 1080));
            $BigImage->save($tmpFilePath . $hardPath . '_big_1920.png');
            $speakers->image = $hardPath;
        }

        $speakers->user_id = $inputs['user_id'];
        $speakers->archive_id = $inputs['archive_id'];
        $speakers->full_name_uz = $inputs['full_name_uz'];
        $speakers->full_name_ru = $inputs['full_name_ru'];
        $speakers->full_name_en = $inputs['full_name_en'];
        $speakers->job_uz = $inputs['job_uz'];
        $speakers->job_ru = $inputs['job_ru'];
        $speakers->job_en = $inputs['job_en'];
        $speakers->facebook_ur = $inputs['facebook_url'];
        $speakers->youtube_url = $inputs['youtube_url'];
        $speakers->twitter_url = $inputs['twitter_url'];
        $speakers->linkedin_url = $inputs['linkedin_url'];

        $speakers->description_uz = $inputs['description_uz'];
        if (!empty($speakers->description_uz)) {
            $dom_save_uz = new \DomDocument();
            libxml_use_internal_errors(true);
            $dom_save_uz->loadHtml('<?xml encoding="UTF-8">' . $speakers->description_uz, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $dom_image_save_uz = $dom_save_uz->getElementsByTagName('img');
            foreach ($dom_image_save_uz as $k => $img) {
                $data = $img->getAttribute('src');
                if (preg_match('/data:image/', $data)) {
                    list($type, $data) = explode(';', $data);
                    list(, $data)      = explode(',', $data);
                    $data = base64_decode($data);
                    $image_name = "/upload/speaker/description_image/uz_" . time() . $k . '.jpg';
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
            $speakers->description_uz = str_replace('<?xml encoding="UTF-8">', "", $dom_save_uz->saveHTML());
        }

        $speakers->description_ru = $inputs['description_ru'];
        if (!empty($speakers->description_ru)) {
            $dom_save_ru = new \DomDocument();
            libxml_use_internal_errors(true);
            $dom_save_ru->loadHtml('<?xml encoding="UTF-8">' . $speakers->description_ru, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $dom_image_save_ru = $dom_save_ru->getElementsByTagName('img');
            foreach ($dom_image_save_ru as $k => $img) {
                $data = $img->getAttribute('src');
                if (preg_match('/data:image/', $data)) {
                    list($type, $data) = explode(';', $data);
                    list(, $data)      = explode(',', $data);
                    $data = base64_decode($data);
                    $image_name = "/upload/speaker/description_image/ru_" . time() . $k . '.jpg';
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
            $speakers->description_ru = str_replace('<?xml encoding="UTF-8">', "", $dom_save_ru->saveHTML());
        }

        $speakers->description_en = $inputs['description_en'];
        if (!empty($speakers->description_en)) {
            $dom_save_en = new \DomDocument();
            libxml_use_internal_errors(true);
            $dom_save_en->loadHtml('<?xml encoding="UTF-8">' . $speakers->description_en, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $dom_image_save_en = $dom_save_en->getElementsByTagName('img');
            foreach ($dom_image_save_en as $k => $img) {
                $data = $img->getAttribute('src');
                if (preg_match('/data:image/', $data)) {
                    list($type, $data) = explode(';', $data);
                    list(, $data)      = explode(',', $data);
                    $data = base64_decode($data);
                    $image_name = "/upload/speaker/description_image/en_" . time() . $k . '.jpg';
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
            $speakers->description_en = str_replace('<?xml encoding="UTF-8">', "", $dom_save_en->saveHTML());
        }


        $speakers->save();

        if (!empty($inputs['id'])) {
            Session::flash('warning', __('ALL_CHANGES_SUCCESSFUL_SAVED'));
            return redirect('admin/speakers');
        } else {
            Session::flash('warning', __('ALL_SUCCESSFUL_SAVED'));
            return redirect('admin/speakers');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $speaker = Speakers::find($id);
        return view('admin.speaker.show')->with('speaker', $speaker);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $speaker = Speakers::find($id);
        $archives = Archive::all();
        $users = User::all();
        return view('admin.speaker.edit', [
            'speaker' => $speaker,
            'archives' => $archives,
            'users' => $users,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Speakers $speakers)
    {
        $data = $request->except(array('_token'));
        $rule = array(
            'full_name_uz' => 'required',
            'job_uz' => 'required',
        );

        $validator = Validator::make($data, $rule);

        if ($validator->fails()) {
            Session::flash('warning', $validator->messages());
            return redirect()->back();
        }

        $inputs = $request->all();
        if (!empty($inputs['id'])) {
            $speakers = Speakers::findOrFail($inputs['id']);
        } else {
            $speakers = new Speakers;
        }

        $image = $request->file('image');
        if ($image) {
            $tmpFilePath = 'upload/speaker/';
            $hardPath = Str::slug('speaker_', '-') . '-' . '-' . md5(time());
            $imagine = new \Imagine\Gd\Imagine();
            $image = $imagine->open($image);
            $thumbnail = $image->thumbnail(new \Imagine\Image\Box(267, 267));
            $thumbnail->save($tmpFilePath . $hardPath . '_thumbnail_267.png');
            $BigImage = $image->thumbnail(new \Imagine\Image\Box(1920, 1080));
            $BigImage->save($tmpFilePath . $hardPath . '_big_1920.png');
            $speakers->image = $hardPath;
        }

        $speakers->user_id = $inputs['user_id'];
        $speakers->archive_id = $inputs['archive_id'];
        $speakers->full_name_uz = $inputs['full_name_uz'];
        $speakers->full_name_ru = $inputs['full_name_ru'];
        $speakers->full_name_en = $inputs['full_name_en'];
        $speakers->job_uz = $inputs['job_uz'];
        $speakers->job_ru = $inputs['job_ru'];
        $speakers->job_en = $inputs['job_en'];
        $speakers->facebook_ur = $inputs['facebook_url'];
        $speakers->youtube_url = $inputs['youtube_url'];
        $speakers->twitter_url = $inputs['twitter_url'];
        $speakers->linkedin_url = $inputs['linkedin_url'];

        $speakers->description_uz = $inputs['description_uz'];
        if (!empty($speakers->description_uz)) {
            $dom_save_uz = new \DomDocument();
            libxml_use_internal_errors(true);
            $dom_save_uz->loadHtml('<?xml encoding="UTF-8">' . $speakers->description_uz, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $dom_image_save_uz = $dom_save_uz->getElementsByTagName('img');
            foreach ($dom_image_save_uz as $k => $img) {
                $data = $img->getAttribute('src');
                if (preg_match('/data:image/', $data)) {
                    list($type, $data) = explode(';', $data);
                    list(, $data)      = explode(',', $data);
                    $data = base64_decode($data);
                    $image_name = "/upload/speaker/description_image/uz_" . time() . $k . '.jpg';
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
            $speakers->description_uz = str_replace('<?xml encoding="UTF-8">', "", $dom_save_uz->saveHTML());
        }

        $speakers->description_ru = $inputs['description_ru'];
        if (!empty($speakers->description_ru)) {
            $dom_save_ru = new \DomDocument();
            libxml_use_internal_errors(true);
            $dom_save_ru->loadHtml('<?xml encoding="UTF-8">' . $speakers->description_ru, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $dom_image_save_ru = $dom_save_ru->getElementsByTagName('img');
            foreach ($dom_image_save_ru as $k => $img) {
                $data = $img->getAttribute('src');
                if (preg_match('/data:image/', $data)) {
                    list($type, $data) = explode(';', $data);
                    list(, $data)      = explode(',', $data);
                    $data = base64_decode($data);
                    $image_name = "/upload/speaker/description_image/ru_" . time() . $k . '.jpg';
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
            $speakers->description_ru = str_replace('<?xml encoding="UTF-8">', "", $dom_save_ru->saveHTML());
        }

        $speakers->description_en = $inputs['description_en'];
        if (!empty($speakers->description_en)) {
            $dom_save_en = new \DomDocument();
            libxml_use_internal_errors(true);
            $dom_save_en->loadHtml('<?xml encoding="UTF-8">' . $speakers->description_en, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $dom_image_save_en = $dom_save_en->getElementsByTagName('img');
            foreach ($dom_image_save_en as $k => $img) {
                $data = $img->getAttribute('src');
                if (preg_match('/data:image/', $data)) {
                    list($type, $data) = explode(';', $data);
                    list(, $data)      = explode(',', $data);
                    $data = base64_decode($data);
                    $image_name = "/upload/speaker/description_image/en_" . time() . $k . '.jpg';
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
            $speakers->description_en = str_replace('<?xml encoding="UTF-8">', "", $dom_save_en->saveHTML());
        }


        $speakers->save();

        if (!empty($inputs['id'])) {
            Session::flash('warning', __('ALL_CHANGES_SUCCESSFUL_SAVED'));
            return redirect('admin/speakers');
        } else {
            Session::flash('warning', __('ALL_SUCCESSFUL_SAVED'));
            return redirect('admin/speakers');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $speakers = Speakers::findOrFail($id);
        // $image_path = public_path() . '/upload/speaker/' . $speakers->image . '-d.png';
        // unlink($image_path);
        $speakers->delete();
        return redirect('admin/speakers')->with('warning', 'SPEAKER_TABLES_DELETED');
    }
}
