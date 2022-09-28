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
    public function SignOut() {
        Auth::logout();
        return redirect()->route('m-home');
    }
    public function home()
    {
        $lang = \App::getLocale();
        $news = News::select('id', 'user_image', DB::raw('SUBSTRING(`title_' . $lang . '`, 1, 50) as title'), DB::raw('SUBSTRING(`description_' . $lang . '`, 1, 70) as text'))->orderBy('created_at', 'desc')->where('cat_id','=',1)->take(5)->get();
        $conferens = News::select('id', 'user_image', DB::raw('SUBSTRING(`title_' . $lang . '`, 1, 40) as title'), 'created_at')->where('cat_id', 1)->take(5)->get();
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
        $conferensShow = News::select('id', 'title_'. $lang . ' as title', 'user_image', DB::raw('SUBSTRING(`description_' . $lang . '`, 1, 255) as text'), 'created_at')->where(['id' => $id])->first();
        return view('mobile.conferensShow', ['conferensShow' => $conferensShow]);
    }

    public function speakerShow($id)
    {
        $lang = \App::getLocale();
        $speakerShow = Speakers::select('id', 'full_name_'. $lang . ' as name', 'image', 'created_at', DB::raw('SUBSTRING(`description_' . $lang . '`, 1, 700) as text'), 'facebook_ur', 'twitter_url', 'youtube_url', 'linkedin_url')->where(['id' => $id])->first();
        return view('mobile.speakerShow', ['speakerShow' => $speakerShow]);
    }

    public function youtobe_list()
    {
        $conferences = Conference::where('is_active','=',1)->get();
        return view('mobile.youtobe_list', ['conferences' => $conferences]);
    }

    public function youtobe($id)
    {
        $lang = \App::getLocale();
        $conferences = Conference::select('id','live_url', 'title_'. $lang . ' as title')->take(1)->get();
        // dd($conferences);
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
        $ConfSchedules = DB::table('conferences')
            ->select(DB::raw('DATE(started_at) as date'))
            ->groupBy('date')
            ->get();

        // $condates = DB::table('conferences')
        // ->whereDate('started_at', $id)
        // ->get();    

        $lang = \App::getLocale();
        // $condate_data = Conference::select('id', 'started_at')->take(5)->get();
        $conferences = Conference::select('id', 'user_image', DB::raw('SUBSTRING(`title_' . $lang . '`, 1, 15) as title'), 'started_at')->get();
        return view('mobile.calendar', ['ConfSchedules' => $ConfSchedules, 'conferences' => $conferences]);
    }

    public function qrkod()
    {
        $lang = \App::getLocale();
        $userTicket = null;
        if (isset(Auth::user()->id)) {
            $userTicket = UserTicket::select('u.first_name as first_name', 'u.last_name as last_name', 'u.id as u_id', 'p.name_'.$lang.' as profession_name', 'user_tickets.ticket_id as ticket_id', 'user_tickets.id as t_id')
            ->leftJoin('users as u', 'user_tickets.user_id', '=', 'u.id')
            ->leftJoin('professions as p', 'u.profession_id', '=', 'p.id')
            ->where('user_id', Auth::user()->id)
            ->first();
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
