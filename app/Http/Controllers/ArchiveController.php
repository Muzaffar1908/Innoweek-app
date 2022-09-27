<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Archive\Archive;
use App\Models\Archive\Speakers;
use App\Models\Conference;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class ArchiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $archives = Archive::orderBy('id','desc')->paginate(5);
        $users = User::all();
        return view('admin.archive.index', compact('archives', 'users'));
    }

    public function is_active($id)
    {
        $update = Archive::find($id);
        if ($update->is_active == 1) {
            $update->is_active = 0;
        } else {
            $update->is_active = 1;
        }
        $update->save();

        $conferences = Conference::where('archive_id', '=', $id)->where('is_active', '!=', $update->is_active)->get();
        foreach ($conferences as $conference) {
            if (!($conference->is_active == $update->is_active)) {
                $conference->is_active = $update->is_active;
            }
            $conference->save();
        }

        $speakers = Speakers::where('archive_id', '=', $id)->where('is_active', '!=', $update->is_active)->get();
        foreach ($speakers as $speaker) {
            if (!($speaker->is_active == $update->is_active)) {
                $speaker->is_active = $update->is_active;
            }
            $speaker->save();
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
        return view('admin.archive.create')->with('users', $users);
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
            'year' => 'required',
        );

        $validator = Validator::make($data, $rule);

        if ($validator->fails()) {
            Session::flash('warning', $validator->messages());
            return redirect()->back();
        }

        $inputs = $request->all();
        if (!empty($inputs['id'])) {
            $archives = Archive::findOrFail($inputs['id']);
        } else {
            $archives = new Archive;
        }

        $archives->user_id = $inputs['user_id'];
        $archives->year = $inputs['year'];

        $archives->description_uz = $inputs['description_uz'];
        if (!empty($archives->description_uz)) {
            $dom_save_uz = new \DomDocument();
            libxml_use_internal_errors(true);
            $dom_save_uz->loadHtml('<?xml encoding="UTF-8">' . $archives->description_uz, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $dom_image_save_uz = $dom_save_uz->getElementsByTagName('img');
            foreach ($dom_image_save_uz as $k => $img) {
                $data = $img->getAttribute('src');
                if (preg_match('/data:image/', $data)) {
                    list($type, $data) = explode(';', $data);
                    list(, $data)      = explode(',', $data);
                    $data = base64_decode($data);
                    $image_name = "/upload/archive/uz_" . time() . $k . '.jpg';
                    $path = public_path() . $image_name;
                    file_put_contents($path, $data);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $image_name);
                }
            }
            $archives->description_uz = str_replace('<?xml encoding="UTF-8">', "", $dom_save_uz->saveHTML((new \DOMXPath($dom_save_uz))->query('/')->item(0)));

        }

        $archives->description_ru = $inputs['description_ru'];
        if (!empty($archives->description_ru)) {
            $dom_save_ru = new \DomDocument();
            libxml_use_internal_errors(true);
            $dom_save_ru->loadHtml('<?xml encoding="UTF-8">' . $archives->description_ru, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $dom_image_save_ru = $dom_save_ru->getElementsByTagName('img');
            foreach ($dom_image_save_ru as $k => $img) {
                $data = $img->getAttribute('src');
                if (preg_match('/data:image/', $data)) {
                    list($type, $data) = explode(';', $data);
                    list(, $data)      = explode(',', $data);
                    $data = base64_decode($data);
                    $image_name = "/upload/archive/ru_" . '_' . time() . '.jpg';
                    $path = public_path() . $image_name;
                    file_put_contents($path, $data);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $image_name);
                }
            }
            $archives->description_ru = str_replace('<?xml encoding="UTF-8">', "", $dom_save_ru->saveHTML((new \DOMXPath($dom_save_ru))->query('/')->item(0)));
        }

        $archives->description_en = $inputs['description_en'];
        if (!empty($archives->description_en)) {
            $dom_save_en = new \DomDocument();
            libxml_use_internal_errors(true);
            $dom_save_en->loadHtml('<?xml encoding="UTF-8">' . $archives->description_en, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $dom_image_save_en = $dom_save_en->getElementsByTagName('img');
            foreach ($dom_image_save_en as $k => $img) {
                $data = $img->getAttribute('src');
                if (preg_match('/data:image/', $data)) {
                    list($type, $data) = explode(';', $data);
                    list(, $data)      = explode(',', $data);
                    $data = base64_decode($data);
                    $image_name = "/upload/archive/en_" . '_' . time() . '.jpg';
                    $path = public_path() . $image_name;
                    file_put_contents($path, $data);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $image_name);
                }
            }
            $archives->description_en = str_replace('<?xml encoding="UTF-8">', "", $dom_save_en->saveHTML((new \DOMXPath($dom_save_en))->query('/')->item(0)));
        }

        $archives->save();

        if (!empty($inputs['id'])) {
            Session::flash('warning', __('ALL_CHANGES_SUCCESSFUL_SAVED'));
            return redirect('admin/archive');
        } else {
            Session::flash('warning', __('ALL_SUCCESSFUL_SAVED'));
            return redirect('admin/archive');
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
        $archive = Archive::find($id);
        $users = User::all();
        return view('admin.archive.show', [
            'archive' => $archive,
            'users' => $users,
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
        $archive = Archive::find($id);
        $users = User::all();
        return view('admin.archive.edit', [
            'archive' => $archive,
            'users' => $users,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Archive $archives)
    {
        $data = $request->except(array('_token'));
        $rule = array(
            'year' => 'required',
        );

        $validator = Validator::make($data, $rule);

        if ($validator->fails()) {
            Session::flash('warning', $validator->messages());
            return redirect()->back();
        }

        $inputs = $request->all();
        if (!empty($inputs['id'])) {
            $archives = Archive::findOrFail($inputs['id']);
        } else {
            $archives = new Archive;
        }

        $archives->user_id = $inputs['user_id'];
        $archives->year = $inputs['year'];

        $archives->description_uz = $inputs['description_uz'];
        if (!empty($archives->description_uz)) {
            $dom_save_uz = new \DomDocument();
            libxml_use_internal_errors(true);
            $dom_save_uz->loadHtml('<?xml encoding="UTF-8">' . $archives->description_uz, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $dom_image_save_uz = $dom_save_uz->getElementsByTagName('img');
            foreach ($dom_image_save_uz as $k => $img) {
                $data = $img->getAttribute('src');
                if (preg_match('/data:image/', $data)) {
                    list($type, $data) = explode(';', $data);
                    list(, $data)      = explode(',', $data);
                    $data = base64_decode($data);
                    $image_name = "/upload/archive/uz_" . time() . $k . '.jpg';
                    $path = public_path() . $image_name;
                    file_put_contents($path, $data);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $image_name);
                }
            }

            $archives->description_uz = str_replace('<?xml encoding="UTF-8">', "", $dom_save_uz->saveHTML((new \DOMXPath($dom_save_uz))->query('/')->item(0)));
        }

        $archives->description_ru = $inputs['description_ru'];
        if (!empty($archives->description_ru)) {
            $dom_save_ru = new \DomDocument();
            libxml_use_internal_errors(true);
            $dom_save_ru->loadHtml('<?xml encoding="UTF-8">' . $archives->description_ru, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $dom_image_save_ru = $dom_save_ru->getElementsByTagName('img');
            foreach ($dom_image_save_ru as $k => $img) {
                $data = $img->getAttribute('src');
                if (preg_match('/data:image/', $data)) {
                    list($type, $data) = explode(';', $data);
                    list(, $data)      = explode(',', $data);
                    $data = base64_decode($data);
                    $image_name = "/upload/archive/ru_" . '_' . time() . '.jpg';
                    $path = public_path() . $image_name;
                    file_put_contents($path, $data);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $image_name);
                }
            }

            $archives->description_ru = str_replace('<?xml encoding="UTF-8">', "", $dom_save_ru->saveHTML((new \DOMXPath($dom_save_ru))->query('/')->item(0)));

        }

        $archives->description_en = $inputs['description_en'];
        if (!empty($archives->description_en)) {
            $dom_save_en = new \DomDocument();
            libxml_use_internal_errors(true);
            $dom_save_en->loadHtml('<?xml encoding="UTF-8">' . $archives->description_en, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $dom_image_save_en = $dom_save_en->getElementsByTagName('img');
            foreach ($dom_image_save_en as $k => $img) {
                $data = $img->getAttribute('src');
                if (preg_match('/data:image/', $data)) {
                    list($type, $data) = explode(';', $data);
                    list(, $data)      = explode(',', $data);
                    $data = base64_decode($data);
                    $image_name = "/upload/archive/en_" . '_' . time() . '.jpg';
                    $path = public_path() . $image_name;
                    file_put_contents($path, $data);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $image_name);
                }
            }

            $archives->description_en = str_replace('<?xml encoding="UTF-8">', "", $dom_save_en->saveHTML((new \DOMXPath($dom_save_en))->query('/')->item(0)));

        }

        $archives->save();

        if (!empty($inputs['id'])) {
            Session::flash('warning', __('ALL_CHANGES_SUCCESSFUL_SAVED'));
            return redirect('admin/archive');
        } else {
            Session::flash('warning', __('ALL_SUCCESSFUL_SAVED'));
            return redirect('admin/archive');
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
        Archive::destroy($id);
        return redirect('admin/archive')->with('warning', 'ARCHIVE_TABLES_DELETED');
    }
}
