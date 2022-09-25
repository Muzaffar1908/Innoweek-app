<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use App\Models\Archive\Speakers;
use App\Models\Conference;
use App\Models\News\News;
use App\Models\UserTicket;
use Auth;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function home()
    {
        $lang = \App::getLocale();
        $news = News::select('id', 'user_image', DB::raw('SUBSTRING(`title_' . $lang . '`, 1, 50) as title'), DB::raw('SUBSTRING(`description_' . $lang . '`, 1, 70) as text'))->orderBy('created_at', 'desc')->where('cat_id','=',1)->take(5)->get();
        $conferens = Conference::select('id', 'user_image', DB::raw('SUBSTRING(`title_' . $lang . '`, 1, 40) as title'), 'created_at')->orderBy('created_at', 'desc')->where('is_active','=',1)->take(4)->get();
        $speakers = Speakers::select('id', 'image', 'full_name_'. $lang . ' as name', DB::raw('SUBSTRING(`job_' . $lang . '`, 1, 20) as job') )->orderBy('created_at', 'desc')->where('is_active','=',1)->take(6)->get();
        return view('mobile.index', [
            'news' => $news,
            'conferens' => $conferens,
            'speakers' => $speakers,
            'lang' => $lang,
        ]);
    }

    public function newsShow($id)
    {
        $lang = \App::getLocale();
        $news = News::select('id', 'user_image', DB::raw('SUBSTRING(`title_' . $lang . '`, 1, 50) as title'), 'created_at')->orderBy('created_at', 'desc')->where('cat_id','=',1)->take(5)->get();
        $newsShow = News::select('id', 'title_'. $lang . ' as title', 'user_image', DB::raw('SUBSTRING(`description_' . $lang . '`, 1, 700) as text'), 'created_at')->where(['id' => $id])->first();
        return view('mobile.newsShow', ['newsShow' => $newsShow, 'news' => $news]);
    }

    public function conferensShow($id)
    {
        $lang = \App::getLocale();
        $conferensShow = Conference::select('id', 'title_'. $lang . ' as title', 'user_image', 'created_at', DB::raw('SUBSTRING(`description_' . $lang . '`, 1, 700) as text'))->where(['id' => $id])->first();
        return view('mobile.conferensShow', ['conferensShow' => $conferensShow]);
    }

    public function speakerShow($id)
    {
        $lang = \App::getLocale();
        $speakerShow = Speakers::select('id', 'full_name_'. $lang . ' as name', 'image', 'created_at', DB::raw('SUBSTRING(`description_' . $lang . '`, 1, 700) as text', 'facebook_ur', 'twitter_url', 'youtube_url', 'linkedin_url'))->where(['id' => $id])->first();
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
        $userTicket = null;
        if (isset(Auth::user()->id)) {
            $userTicket = UserTicket::where('user_id', Auth::user()->id)->first();
        }
        return view('mobile.qrkod', ['ticket' => $userTicket]);
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
