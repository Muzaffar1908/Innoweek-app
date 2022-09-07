<?php

namespace App\Http\Controllers;

use App\Models\Archive\Archive;
use App\Models\Conference;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ConferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conferences = Conference::paginate(5);
        $users = User::all();
        $archives = Archive::all();
        return view('admin.conference.index', compact('conferences', 'users', 'archives'));
    }

    public function is_active($id)
    {
        $update=Conference::find($id);
        if($update->is_active==1){
            $update->is_active=0;
        }else{
            $update->is_active=1;
        }
        $update->save();
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
          'live_url' => 'required',
        );

        if (!file_exists('uploads/conference')) {
            mkdir('uploads/conference', 0777, true);
        }

        if (!file_exists('uploads/conference/description_image')) {
            mkdir('uploads/conference/description_image', 0777, true);
        }

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

        $conferences->user_id = $inputs['user_id'];
        $conferences->archive_id = $inputs['archive_id'];
        $conferences->started_at = $inputs['started_at'];
        $conferences->title_uz = $inputs['title_uz'];
        $conferences->title_ru = $inputs['title_ru'];
        $conferences->title_en = $inputs['title_en'];
        $conferences->live_url = $inputs['live_url'];

        $conferences->description_uz = $inputs['description_uz'];

       $image = $request->file('user_image');
        if ($image) {
            if (empty($inputs['id'])) {
                \File::delete(public_path() .'/uploads/conference/'.$conferences->image.'-m.png');
                \File::delete(public_path() .'/uploads/conference/'.$conferences->image.'-d.png');
            }
            $tmpFilePath = 'uploads/conference/';
            $hardPath =  Str::slug('conference', '-').'-'.md5(time());
            $img = Image::make($image);
            $img1 = Image::make($image);
//            $img->fit(360, 640)->save($tmpFilePath.$hardPath.'-m.png');
            $img1->save($tmpFilePath.$hardPath.'-d.png');


            $conferences->image = $hardPath;
        }

        if (!empty($conferences->description_uz)) {
            $dom_save_uz = new \DomDocument();
            libxml_use_internal_errors(true);
            $dom_save_uz->loadHtml('<?xml encoding="UTF-8">'.$conferences->description_uz, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $dom_image_save_uz = $dom_save_uz->getElementsByTagName('img');
            foreach ($dom_image_save_uz as $k => $img) {
                $data = $img->getAttribute('src');
                if (preg_match('/data:image/', $data)) {
                    list($type, $data) = explode(';', $data);
                    list(, $data)      = explode(',', $data);
                    $data = base64_decode($data);
                    $image_name= "/uploads/conference/description_image/uz_" . time().$k.'.jpg';
                    $path = public_path() . $image_name;
                    file_put_contents($path, $data);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $image_name);
                }
            }
            $conferences->description_uz = str_replace('<?xml encoding="UTF-8">', "",$dom_save_uz->saveHTML());
        }

        $conferences->description_ru = $inputs['description_ru'];
        if (!empty($conferences->description_ru)) {
            $dom_save_ru = new \DomDocument();
            libxml_use_internal_errors(true);
            $dom_save_ru->loadHtml('<?xml encoding="UTF-8">'.$conferences->description_ru, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $dom_image_save_ru = $dom_save_ru->getElementsByTagName('img');
            foreach ($dom_image_save_ru as $k => $img) {
                $data = $img->getAttribute('src');
                if (preg_match('/data:image/', $data)) {
                    list($type, $data) = explode(';', $data);
                    list(, $data)      = explode(',', $data);
                    $data = base64_decode($data);
                    $image_name= "/uploads/conference/description_image/ru_".'_'.time().'.jpg';
                    $path = public_path() . $image_name;
                    file_put_contents($path, $data);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $image_name);
                }
            }
            $conferences->description_ru = str_replace('<?xml encoding="UTF-8">', "",$dom_save_ru->saveHTML());
        }

        $conferences->description_en = $inputs['description_en'];
        if (!empty($conferences->description_en)) {
            $dom_save_en = new \DomDocument();
            libxml_use_internal_errors(true);
            $dom_save_en->loadHtml('<?xml encoding="UTF-8">'.$conferences->description_en, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            //$dom_save_en->loadHTML($conferences->description_en);
            $dom_image_save_en = $dom_save_en->getElementsByTagName('img');
            foreach ($dom_image_save_en as $k => $img) {
                $data = $img->getAttribute('src');
                if (preg_match('/data:image/', $data)) {
                    list($type, $data) = explode(';', $data);
                    list(, $data)      = explode(',', $data);
                    $data = base64_decode($data);
                    $image_name= "/uploads/conference/description_image/en_".'_'.time().'.jpg';
                    $path = public_path() . $image_name;
                    file_put_contents($path, $data);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $image_name);
                }
            }
            $conferences->description_en = str_replace('<?xml encoding="UTF-8">', "",$dom_save_en->saveHTML());
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
          'live_url' => 'required',
        );

        if (!file_exists('uploads/conference')) {
            mkdir('uploads/conference', 0777, true);
        }

        if (!file_exists('uploads/conference/description_image')) {
            mkdir('uploads/conference/description_image', 0777, true);
        }

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

        $conferences->user_id = $inputs['user_id'];
        $conferences->archive_id = $inputs['archive_id'];
        $conferences->started_at = $inputs['started_at'];
        $conferences->title_uz = $inputs['title_uz'];
        $conferences->title_ru = $inputs['title_ru'];
        $conferences->title_en = $inputs['title_en'];
        $conferences->live_url = $inputs['live_url'];

        $conferences->description_uz = $inputs['description_uz'];

        $image = $request->file('user_image');
        if ($image) {
            if (empty($inputs['id'])) {
                \File::delete(public_path() .'/uploads/conference/'.$conferences->image.'-m.png');
                \File::delete(public_path() .'/uploads/conference/'.$conferences->image.'-d.png');
            }
            $tmpFilePath = 'uploads/conference/';
            $hardPath =  Str::slug('conference', '-').'-'.md5(time());
            $img = Image::make($image);
            $img1 = Image::make($image);
//            $img->fit(360, 640)->save($tmpFilePath.$hardPath.'-m.png');
            $img1->save($tmpFilePath.$hardPath.'-d.png');


            $conferences->image = $hardPath;
        }

        if (!empty($conferences->description_uz)) {
            $dom_save_uz = new \DomDocument();
            libxml_use_internal_errors(true);
            $dom_save_uz->loadHtml('<?xml encoding="UTF-8">'.$conferences->description_uz, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $dom_image_save_uz = $dom_save_uz->getElementsByTagName('img');
            foreach ($dom_image_save_uz as $k => $img) {
                $data = $img->getAttribute('src');
                if (preg_match('/data:image/', $data)) {
                    list($type, $data) = explode(';', $data);
                    list(, $data)      = explode(',', $data);
                    $data = base64_decode($data);
                    $image_name= "/uploads/conference/description_image/uz_" . time().$k.'.jpg';
                    $path = public_path() . $image_name;
                    file_put_contents($path, $data);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $image_name);
                }
            }
            $conferences->description_uz = str_replace('<?xml encoding="UTF-8">', "",$dom_save_uz->saveHTML());
        }

        $conferences->description_ru = $inputs['description_ru'];
        if (!empty($conferences->description_ru)) {
            $dom_save_ru = new \DomDocument();
            libxml_use_internal_errors(true);
            $dom_save_ru->loadHtml('<?xml encoding="UTF-8">'.$conferences->description_ru, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $dom_image_save_ru = $dom_save_ru->getElementsByTagName('img');
            foreach ($dom_image_save_ru as $k => $img) {
                $data = $img->getAttribute('src');
                if (preg_match('/data:image/', $data)) {
                    list($type, $data) = explode(';', $data);
                    list(, $data)      = explode(',', $data);
                    $data = base64_decode($data);
                    $image_name= "/uploads/conference/description_image/ru_".'_'.time().'.jpg';
                    $path = public_path() . $image_name;
                    file_put_contents($path, $data);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $image_name);
                }
            }
            $conferences->description_ru = str_replace('<?xml encoding="UTF-8">', "",$dom_save_ru->saveHTML());
        }

        $conferences->description_en = $inputs['description_en'];
        if (!empty($conferences->description_en)) {
            $dom_save_en = new \DomDocument();
            libxml_use_internal_errors(true);
            $dom_save_en->loadHtml('<?xml encoding="UTF-8">'.$conferences->description_en, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            //$dom_save_en->loadHTML($conferences->description_en);
            $dom_image_save_en = $dom_save_en->getElementsByTagName('img');
            foreach ($dom_image_save_en as $k => $img) {
                $data = $img->getAttribute('src');
                if (preg_match('/data:image/', $data)) {
                    list($type, $data) = explode(';', $data);
                    list(, $data)      = explode(',', $data);
                    $data = base64_decode($data);
                    $image_name= "/uploads/conference/description_image/en_".'_'.time().'.jpg';
                    $path = public_path() . $image_name;
                    file_put_contents($path, $data);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $image_name);
                }
            }
            $conferences->description_en = str_replace('<?xml encoding="UTF-8">', "",$dom_save_en->saveHTML());
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
