<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use App\Models\Speaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;


class SpeakerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $speakers = Speaker::paginate(5);
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
        return view('admin.speaker.create', compact('archives'));
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
            'fullname' => 'required',
            'description_uz' => 'required',
        );
        if (!file_exists('uploads/speaker')) {
            mkdir('uploads/speaker', 0777, true);
        }

        $validator = Validator::make($data, $rule);

        if ($validator->fails()) {
            Session::flash('warning', $validator->messages());
            return redirect()->back();
        }

        $inputs = $request->all();
        if (!empty($inputs['id'])) {
            $speakers = Speaker::findOrFail($inputs['id']);
        } else {
            $speakers = new Speaker;
        }

        $speakers->archive_id = $inputs['archive_id'];
        $speakers->fullname = $inputs['fullname'];
        $speakers->job = $inputs['job'];
        $speakers->facebook_url = $inputs['facebook_url'];
        $speakers->instagram_url = $inputs['instagram_url'];
        $speakers->twitter_url = $inputs['twitter_url'];
        $speakers->linkedin_url = $inputs['linkedin_url'];

        $speakers->description_uz = $inputs['description_uz'];
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ex = $file->getClientOriginalExtension();
            $imageName = md5(rand(100, 999999) . microtime()) . "." . $ex;
            $file->move(public_path('uploads/speaker'), $imageName);
            // unlink($userticket->ticket_image);
            $data['image'] = 'uploads/speaker/' . $imageName;
        }
        $speakers->image = $imageName;
        if (!empty($speakers->description_uz)) {
            $dom_save_uz = new \DomDocument();
            libxml_use_internal_errors(true);
            $dom_save_uz->loadHtml('<?xml encoding="UTF-8">' . $speakers->description_uz, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $dom_image_save_uz = $dom_save_uz->getElementsByTagName('img');
            foreach ($dom_image_save_uz as $k => $img) {
                $data = $img->getAttribute('src');
                if (preg_match('/data:image/', $data)) {
                    list($type, $data) = explode(';', $data);
                    list(, $data) = explode(',', $data);
                    $data = base64_decode($data);
                    $image_name = "/uploads/speaker/description_image/uz_" . time() . $k . '.jpg';
                    $path = public_path() . $image_name;
                    file_put_contents($path, $data);
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
                    list(, $data) = explode(',', $data);
                    $data = base64_decode($data);
                    $image_name = "/uploads/speaker/description_image/ru_" . '_' . time() . '.jpg';
                    $path = public_path() . $image_name;
                    file_put_contents($path, $data);
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
                    list(, $data) = explode(',', $data);
                    $data = base64_decode($data);
                    $image_name = "/uploads/speaker/description_image/en_" . '_' . time() . '.jpg';
                    $path = public_path() . $image_name;
                    file_put_contents($path, $data);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $image_name);
                }
            }
            $speakers->description_en = str_replace('<?xml encoding="UTF-8">', "", $dom_save_en->saveHTML());
        }


        $speakers->save();

        if (!empty($inputs['id'])) {
            Session::flash('warning', __('ALL_CHANGES_SUCCESSFUL_SAVED'));
            return redirect('admin/speaker');
        } else {
            Session::flash('warning', __('ALL_SUCCESSFUL_SAVED'));
            return redirect('admin/speaker');
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
        $speaker = Speaker::find($id);
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
        $speaker = Speaker::find($id);
        $archives = Archive::all();
        return view('admin.speaker.edit', [
            'speaker' => $speaker,
            'archives' => $archives,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Speaker $speakers)
    {
        $data = $request->except(array('_token'));
        $rule = array(
            'fullname' => 'required',
            'description_uz' => 'required',
        );

        $validator = Validator::make($data, $rule);

        if ($validator->fails()) {
            Session::flash('warning', $validator->messages());
            return redirect()->back();
        }

        $inputs = $request->all();
        if (!empty($inputs['id'])) {
            $speakers = Speaker::findOrFail($inputs['id']);
        } else {
            $speakers = new Speaker;
        }

        $speakers->archive_id = $inputs['archive_id'];
        $speakers->fullname = $inputs['fullname'];
        $speakers->facebook_url = $inputs['facebook_url'];
        $speakers->instagram_url = $inputs['instagram_url'];
        $speakers->twitter_url = $inputs['twitter_url'];
        $speakers->linkedin_url = $inputs['linkedin_url'];

        $speakers->description_uz = $inputs['description_uz'];

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ex = $file->getClientOriginalExtension();
            $imageName = md5(rand(100, 999999) . microtime()) . "." . $ex;
            $file->move(public_path('uploads/speaker'), $imageName);
            // unlink($userticket->ticket_image);
            $data['image'] = 'uploads/speaker/' . $imageName;
        }


        if (!empty($speakers->description_uz)) {
            $dom_save_uz = new \DomDocument();
            libxml_use_internal_errors(true);
            $dom_save_uz->loadHtml('<?xml encoding="UTF-8">' . $speakers->description_uz, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $dom_image_save_uz = $dom_save_uz->getElementsByTagName('img');
            foreach ($dom_image_save_uz as $k => $img) {
                $data = $img->getAttribute('src');
                if (preg_match('/data:image/', $data)) {
                    list($type, $data) = explode(';', $data);
                    list(, $data) = explode(',', $data);
                    $data = base64_decode($data);
                    $image_name = "/uploads/speaker/description_image/uz_" . time() . $k . '.jpg';
                    $path = public_path() . $image_name;
                    file_put_contents($path, $data);
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
                    list(, $data) = explode(',', $data);
                    $data = base64_decode($data);
                    $image_name = "/uploads/speaker/description_image/ru_" . '_' . time() . '.jpg';
                    $path = public_path() . $image_name;
                    file_put_contents($path, $data);
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
                    list(, $data) = explode(',', $data);
                    $data = base64_decode($data);
                    $image_name = "/uploads/speaker/description_image/en_" . '_' . time() . '.jpg';
                    $path = public_path() . $image_name;
                    file_put_contents($path, $data);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $image_name);
                }
            }
            $speakers->description_en = str_replace('<?xml encoding="UTF-8">', "", $dom_save_en->saveHTML());
        }
        $speakers->image=$imageName;
        $speakers->save();

        if (!empty($inputs['id'])) {
            Session::flash('warning', __('ALL_CHANGES_SUCCESSFUL_SAVED'));
            return redirect('admin/speaker');
        } else {
            Session::flash('warning', __('ALL_SUCCESSFUL_SAVED'));
            return redirect('admin/speaker');
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
        Speaker::destroy($id);
        return redirect('admin/speaker')->with('warning', 'SPEAKER_TABLES_DELETED');
    }
}
