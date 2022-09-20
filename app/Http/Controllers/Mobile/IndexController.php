<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use App\Models\Archive\Speakers;
use App\Models\Conference;
use App\Models\News\News;
use App\Models\UserTicket;
use Illuminate\Http\Request;
use Illuminate\View\ViewName;

class IndexController extends Controller
{
    public function home()
    {
        $news = News::orderBy('created_at', 'desc')->where('is_active','=',1)->paginate(5);
        $conferens = Conference::orderBy('created_at', 'desc')->where('is_active','=',1)->paginate(4);
        $speakers = Speakers::orderBy('created_at', 'desc')->where('is_active','=',1)->get();
        return view('mobile.index', [
            'news' => $news,
            'conferens' => $conferens,
            'speakers' => $speakers
        ]);
    }

    public function newsShow($id)
    {
        $news = News::orderBy('created_at', 'desc')->where('is_active','=',1)->paginate(5);
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

    public function youtobe_list()
    {
        $conferences = Conference::where('is_active','=',1)->get();
        return view('mobile.youtobe_list', ['conferences' => $conferences]);
    }

    public function youtobe($id)
    {
        $conferences = Conference::where(['id' => $id])->first();
        return view('mobile.you_tobe', ['conferences' => $conferences]);
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
    public function isregqr($id)
    {
        $ids=UserTicket::where(['user_id'=>$id]);
        return view('mobile.isregqr',['id'=>$ids]);
    }


}
