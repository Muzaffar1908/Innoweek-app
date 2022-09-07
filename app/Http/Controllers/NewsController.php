<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News\News;
use App\Models\News\NewsCategory;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
<<<<<<< HEAD
use SebastianBergmann\CodeCoverage\Node\File;
=======
>>>>>>> 68887ede7003d5764f9ef34166a4f7111844ea4b

class NewsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::paginate(5);
        $users = User::all();
        $news_categories = NewsCategory::all();
        return view('admin.news.index', compact('news', 'users', 'news_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $news_categories = NewsCategory::all();
        return view('admin.news.create', [
          'users' => $users,
          'news_categories' => $news_categories,
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

        if (!file_exists('uploads/news')) {
            mkdir('uploads/news', 0777, true);
        }

        if (!file_exists('uploads/news/description_image')) {
            mkdir('uploads/news/description_image', 0777, true);
        }


        $validator = Validator::make($data, $rule);

        if ($validator->fails()) {
            Session::flash('warning', $validator->messages());
            return redirect()->back();
        }

        $inputs = $request->all();
        if (!empty($inputs['id'])) {
            $news = News::findOrFail($inputs['id']);
        } else {
            $news = new News;
        }

        $user_image = $request->file('user_image');
        if ($user_image) {
            if (empty($inputs['id'])) {
                File::delete(public_path() .'/upload/news/'.$news->user_image.'-b.png');
                File::delete(public_path() .'/upload/news/'.$news->user_image.'-s.png');
            }
            $tmpFilePath = 'uploads/news/';
            $hardPath =  Str::slug('news', '-').'-'.'-'.md5(time());
            $img = Image::make($user_image);
            $img1 = Image::make($user_image);
            $img->fit(1100, 550)->save($tmpFilePath.$hardPath.'-b.png');
            $img1->fit(700, 530)->save($tmpFilePath.$hardPath.'-s.png');
            // $saved = $tmpFilePath.$hardPath. '-s.jpg';
            $news->user_image = $tmpFilePath.$hardPath;
        }

        $news->user_id = $inputs['user_id'];
        $news->cat_id = $inputs['cat_id'];
        $news->title_uz = $inputs['title_uz'];
        $news->title_ru = $inputs['title_ru'];
        $news->title_en = $inputs['title_en'];
        $news->tags = $inputs['tags'];

        $news->description_uz = $inputs['description_uz'];

        $image = $request->file('user_image');
        if ($image) {
            if (empty($inputs['id'])) {
                \File::delete(public_path() .'/uploads/news/'.$news->image.'-m.png');
                \File::delete(public_path() .'/uploads/news/'.$news->image.'-d.png');
            }
            $tmpFilePath = 'uploads/news/';
            $hardPath =  Str::slug('news', '-').'-'.md5(time());
            $img = Image::make($image);
            $img1 = Image::make($image);
//            $img->fit(360, 640)->save($tmpFilePath.$hardPath.'-m.png');
            $img1->save($tmpFilePath.$hardPath.'-d.png');


            $news->user_image = $hardPath;
        }

        if (!empty($news->description_uz)) {
            $dom_save_uz = new \DomDocument();
            libxml_use_internal_errors(true);
            $dom_save_uz->loadHtml('<?xml encoding="UTF-8">'.$news->description_uz, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $dom_image_save_uz = $dom_save_uz->getElementsByTagName('img');
            foreach ($dom_image_save_uz as $k => $img) {
                $data = $img->getAttribute('src');
                if (preg_match('/data:image/', $data)) {
                    list($type, $data) = explode(';', $data);
                    list(, $data)      = explode(',', $data);
                    $data = base64_decode($data);
                    $image_name= "/uploads/news/description_image/uz_" . time().$k.'.jpg';
                    $path = public_path() . $image_name;
                    file_put_contents($path, $data);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $image_name);
                }
            }
            $news->description_uz = str_replace('<?xml encoding="UTF-8">', "",$dom_save_uz->saveHTML());
        }

        $news->description_ru = $inputs['description_ru'];
        if (!empty($news->description_ru)) {
            $dom_save_ru = new \DomDocument();
            libxml_use_internal_errors(true);
            $dom_save_ru->loadHtml('<?xml encoding="UTF-8">'.$news->description_ru, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $dom_image_save_ru = $dom_save_ru->getElementsByTagName('img');
            foreach ($dom_image_save_ru as $k => $img) {
                $data = $img->getAttribute('src');
                if (preg_match('/data:image/', $data)) {
                    list($type, $data) = explode(';', $data);
                    list(, $data)      = explode(',', $data);
                    $data = base64_decode($data);
                    $image_name= "/uploads/news/description_image/ru_".'_'.time().'.jpg';
                    $path = public_path() . $image_name;
                    file_put_contents($path, $data);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $image_name);
                }
            }
            $news->description_ru = str_replace('<?xml encoding="UTF-8">', "",$dom_save_ru->saveHTML());
        }

        $news->description_en = $inputs['description_en'];
        if (!empty($news->description_en)) {
            $dom_save_en = new \DomDocument();
            libxml_use_internal_errors(true);
            $dom_save_en->loadHtml('<?xml encoding="UTF-8">'.$news->description_en, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            //$dom_save_en->loadHTML($news->description_en);
            $dom_image_save_en = $dom_save_en->getElementsByTagName('img');
            foreach ($dom_image_save_en as $k => $img) {
                $data = $img->getAttribute('src');
                if (preg_match('/data:image/', $data)) {
                    list($type, $data) = explode(';', $data);
                    list(, $data)      = explode(',', $data);
                    $data = base64_decode($data);
                    $image_name= "/uploads/news/description_image/en_".'_'.time().'.jpg';
                    $path = public_path() . $image_name;
                    file_put_contents($path, $data);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $image_name);
                }
            }
            $news->description_en = str_replace('<?xml encoding="UTF-8">', "",$dom_save_en->saveHTML());
        }

        $news->save();

        if (!empty($inputs['id'])) {
            Session::flash('warning', __('ALL_CHANGES_SUCCESSFUL_SAVED'));
            return redirect('admin/news');
        } else {
            Session::flash('warning', __('ALL_SUCCESSFUL_SAVED'));
            return redirect('admin/news');
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
        $news = News::find($id);

        return view('admin.news.show', [
            'news' => $news,
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
        $news = News::find($id);
        $users = User::all();
        $news_categories = NewsCategory::all();
        return view('admin.news.edit', [
            'news' => $news,
            'users' => $users,
            'news_categories' => $news_categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $data = $request->except(array('_token'));
        $rule = array(
        'title_uz' => 'required',
        );

        if (!file_exists('uploads/news')) {
            mkdir('uploads/news', 0777, true);
        }

        if (!file_exists('uploads/news/description_image')) {
            mkdir('uploads/news/description_image', 0777, true);
        }


        $validator = Validator::make($data, $rule);

        if ($validator->fails()) {
            Session::flash('warning', $validator->messages());
            return redirect()->back();
        }

        $inputs = $request->all();
        if (!empty($inputs['id'])) {
            $news = News::findOrFail($inputs['id']);
        } else {
            $news = new News;
        }

        $user_image = $request->file('user_image');
        if ($user_image) {
            if (empty($inputs['id'])) {
                File::delete(public_path() .'/upload/blogs/'.$news->user_image.'-b.png');
                File::delete(public_path() .'/upload/blogs/'.$news->user_image.'-s.png');
            }
            $tmpFilePath = 'upload/blogs/banner/';
            $hardPath =  Str::slug('news', '-').'-'.'-'.md5(time());
            $img = Image::make($user_image);
            $img1 = Image::make($user_image);
            $img->fit(1100, 550)->save($tmpFilePath.$hardPath.'-b.png');
            $img1->fit(700, 530)->save($tmpFilePath.$hardPath.'-s.png');
            // $saved = $tmpFilePath.$hardPath. '-s.jpg';
            $news->user_image = $tmpFilePath.$hardPath;
        }

        $news->user_id = $inputs['user_id'];
        $news->cat_id = $inputs['cat_id'];
        $news->title_uz = $inputs['title_uz'];
        $news->title_ru = $inputs['title_ru'];
        $news->title_en = $inputs['title_en'];
        // $news->user_image = $inputs['user_image'];
        $news->tags = $inputs['tags'];

        $news->description_uz = $inputs['description_uz'];

        $image = $request->file('user_image');
        if ($image) {
            if (empty($inputs['id'])) {
                \File::delete(public_path() .'/uploads/news/'.$news->image.'-m.png');
                \File::delete(public_path() .'/uploads/news/'.$news->image.'-d.png');
            }
            $tmpFilePath = 'uploads/news/';
            $hardPath =  Str::slug('news', '-').'-'.md5(time());
            $img = Image::make($image);
            $img1 = Image::make($image);
//            $img->fit(360, 640)->save($tmpFilePath.$hardPath.'-m.png');
            $img1->save($tmpFilePath.$hardPath.'-d.png');


            $news->user_image = $hardPath;
        }

        if (!empty($news->description_uz)) {
            $dom_save_uz = new \DomDocument();
            libxml_use_internal_errors(true);
            $dom_save_uz->loadHtml('<?xml encoding="UTF-8">'.$news->description_uz, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $dom_image_save_uz = $dom_save_uz->getElementsByTagName('img');
            foreach ($dom_image_save_uz as $k => $img) {
                $data = $img->getAttribute('src');
                if (preg_match('/data:image/', $data)) {
                    list($type, $data) = explode(';', $data);
                    list(, $data)      = explode(',', $data);
                    $data = base64_decode($data);
                    $image_name= "/uploads/news/description_image/uz_" . time().$k.'.jpg';
                    $path = public_path() . $image_name;
                    file_put_contents($path, $data);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $image_name);
                }
            }
            $news->description_uz = str_replace('<?xml encoding="UTF-8">', "",$dom_save_uz->saveHTML());
        }

        $news->description_ru = $inputs['description_ru'];
        if (!empty($news->description_ru)) {
            $dom_save_ru = new \DomDocument();
            libxml_use_internal_errors(true);
            $dom_save_ru->loadHtml('<?xml encoding="UTF-8">'.$news->description_ru, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            $dom_image_save_ru = $dom_save_ru->getElementsByTagName('img');
            foreach ($dom_image_save_ru as $k => $img) {
                $data = $img->getAttribute('src');
                if (preg_match('/data:image/', $data)) {
                    list($type, $data) = explode(';', $data);
                    list(, $data)      = explode(',', $data);
                    $data = base64_decode($data);
                    $image_name= "/uploads/news/description_image/ru_".'_'.time().'.jpg';
                    $path = public_path() . $image_name;
                    file_put_contents($path, $data);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $image_name);
                }
            }
            $news->description_ru = str_replace('<?xml encoding="UTF-8">', "",$dom_save_ru->saveHTML());
        }

        $news->description_en = $inputs['description_en'];
        if (!empty($news->description_en)) {
            $dom_save_en = new \DomDocument();
            libxml_use_internal_errors(true);
            $dom_save_en->loadHtml('<?xml encoding="UTF-8">'.$news->description_en, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
            //$dom_save_en->loadHTML($news->description_en);
            $dom_image_save_en = $dom_save_en->getElementsByTagName('img');
            foreach ($dom_image_save_en as $k => $img) {
                $data = $img->getAttribute('src');
                if (preg_match('/data:image/', $data)) {
                    list($type, $data) = explode(';', $data);
                    list(, $data)      = explode(',', $data);
                    $data = base64_decode($data);
                    $image_name= "/uploads/news/description_image/en_".'_'.time().'.jpg';
                    $path = public_path() . $image_name;
                    file_put_contents($path, $data);
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $image_name);
                }
            }
            $news->description_en = str_replace('<?xml encoding="UTF-8">', "",$dom_save_en->saveHTML());
        }



        $news->save();

        if (!empty($inputs['id'])) {
            Session::flash('warning', __('ALL_CHANGES_SUCCESSFUL_SAVED'));
            return redirect('admin/news');
        } else {
            Session::flash('warning', __('ALL_SUCCESSFUL_SAVED'));
            return redirect('admin/news');
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
        $news = News::findOrFail($id);
        $image_path = public_path().'/'.$news->user_image;
        unlink($image_path);
        $news->delete();
        return redirect('admin/news')->with('warning','NEWS TABLES DELETED');
    }
}
