<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use App\Models\Archive\Speakers;
use App\Models\Conference;
use App\Models\News\News;
use Illuminate\Http\Request;
use Illuminate\View\ViewName;

class IndexController extends Controller
{
    public function home()
    {
        $news = News::orderBy('created_at', 'desc')->paginate(5);
        $conferens = Conference::orderBy('created_at', 'desc')->paginate(4);
        $speakers = Speakers::orderBy('created_at', 'desc')->paginate(5);
        return view('mobile.index', [
            'news' => $news,
            'conferens' => $conferens,
            'speakers' => $speakers
        ]);
    }

    public function newsShow($id)
    {
        $news = News::orderBy('created_at', 'desc')->paginate(5);
        $newsShow = News::where(['id' => $id])->first();
        return view('mobile.newsShow', ['newsShow' => $newsShow, 'news' => $news]);
    }

    public function conferensShow($id)
    {
        $conferensShow = Conference::where(['id' => $id])->first();
        return view('mobile.conferensShow', ['conferensShow' => $conferensShow]);
    }

    public function speakerShow($id)
    {
        $speakerShow = Speakers::where(['id' => $id])->first();
        return view('mobile.speakerShow', ['speakerShow' => $speakerShow]);
    }


    public function profile()
    {
        return view('mobile.profile');
    }


    public function about()
    {
        return view('mobile.about');
    }

    public function map()
    {
        return view('mobile.map');
    }

    public function calendar()
    {
        return view('mobile.calendar');
    }

    public function qrkod()
    {
        return view('mobile.qrkod');
    }

    public function setting()
    {
        return view('mobile.setting');
    }


}
