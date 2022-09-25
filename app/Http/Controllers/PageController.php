<?php

namespace App\Http\Controllers;

use App\Models\Archive\Archive;
use App\Models\Archive\Speakers;
use App\Models\Conference;
use App\Models\Innoweek;
use App\Models\News\Galeries;
use App\Models\News\News;
use App\Models\Partner;
use App\Models\Promo;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;


class PageController extends Controller
{
    public function index()
    {
        $ConfSchedules = DB::table('conferences')
            ->select(DB::raw('DATE(started_at) as date'))
            ->groupBy('date')
            ->get();

        $lang = \App::getLocale();
             
        $condate_data = Conference::select('id', 'started_at', 'stoped_at', 'title_'. $lang . ' as title', 'live_url', 'user_image', DB::raw('SUBSTRING(`description_' . $lang . '`, 1, 70) as text'), 'address_'. $lang . ' as address')->orderBy('created_at', 'DESC')->take(5)->get();

        $lang = \App::getLocale();
        $news = News::select('id', 'title_'. $lang . ' as title', 'user_image')->where('cat_id', 1)->orderBy('created_at', 'DESC')->take(3)->get();
        $news_event = News::select('id', 'user_image', 'title_' . $lang . ' as title', DB::raw('SUBSTRING(`description_' . $lang . '`, 1, 70) as text'))->where('cat_id', 2)->orderBy('created_at', 'DESC')->take(5)->get();
        $speakers = Speakers::select('id', 'image', 'full_name_' . $lang . ' as name', DB::raw('SUBSTRING(`description_' . $lang . '`, 1, 255) as text'), 'facebook_ur', 'twitter_url', 'linkedin_url', 'youtube_url')->orderBy('created_at', 'DESC')->take(6)->get();
        $galleries = Galeries::select('id', 'image')->orderBy('created_at', 'DESC')->take(12)->get();
        $partners = Partner::select('id', 'image', 'image_url')->orderBy('created_at', 'DESC')->take(10)->get();
        // $innoweeks = Innoweek::first();
        $events = Conference::select('id', 'user_image', 'title_' . $lang . ' as title', 'description_' . $lang . ' as desc', 'address_' . $lang . ' as address')->orderBy('created_at', 'DESC')->take(5);
        $promo = Promo::select('id',  'url')->orderBy('created_at', 'DESC')->take(4)->get();
        return view('frontend.app', ['ConfSchedules' => $ConfSchedules, 'condate_data' => $condate_data, 'promo' => $promo, 'news' => $news, 'news_event' => $news_event, 'speakers' => $speakers, 'galleries' => $galleries, 'partners' => $partners, 'events' => $events, 'lang' => $lang]);
    }


    public function register()
    {
        // $innoweeks = Innoweek::first();
        return view('frontend.register');
    }

    public function qr()
    {
        // $innoweeks = Innoweek::first();
        return view('frontend.qr');
    }

    public function schedule($id)
    {
        $ConfSchedules = DB::table('conferences')
            ->select(DB::raw('DATE(started_at) as date'))
            ->groupBy('date')
            ->get();

        $condates = DB::table('conferences')
            ->whereDate('started_at', $id)
            ->get();


        return view('frontend.app', ['condates' => $condates, 'ConfSchedules' => $ConfSchedules]);
    }


    public function newsShow($id)
    {
        // $innoweeks = Innoweek::first();
        $lang = \App::getLocale();

        $news = News::select('id', 'title_'. $lang . ' as title', 'user_image', DB::raw('SUBSTRING(`description_' . $lang . '`, 1, 255) as text'), 'created_at')->findOrFail($id);
        $newsresent = News::select('id', 'user_image', DB::raw('SUBSTRING(`title_' . $lang . '`, 1, 30) as title'), 'created_at')->orderBy('created_at', 'desc')->where('cat_id', 1)->take(5)->get();
        return view('frontend.newshow', ['news' => $news, 'newsresent' => $newsresent]);

    }

    public function eventShow($id)
    {
        $lang = \App::getLocale();

        $events = News::select('id', 'title_'. $lang . ' as title', 'user_image', DB::raw('SUBSTRING(`description_' . $lang . '`, 1, 255) as text'), 'created_at')->findOrFail($id);
        $eventresent = News::select('id', 'user_image', DB::raw('SUBSTRING(`title_' . $lang . '`, 1, 255) as title'), 'created_at')->where('cat_id', 2)->orderBy('created_at', 'desc')->take(5)->get();
        return view('frontend.eventshow', ['events' => $events, 'eventresent' => $eventresent]);
    }

    public function speakerShow($id)
    {
        $lang = \App::getLocale();

        $speakers = Speakers::select('id', 'image', 'full_name_'. $lang . ' as name', 'job_'. $lang . ' as job', DB::raw('SUBSTRING(`description_' . $lang . '`, 1, 255) as text'), 'facebook_ur', 'twitter_url', 'linkedin_url', 'youtube_url')->where(['id' => $id])->first();

        return view('frontend.speakershow', compact('speakers'));
    }

    public function speakers()
    {
        $lang = \App::getLocale();

        $speaker = Speakers::select('id', 'full_name_'. $lang . ' as name', 'job_'. $lang . ' as job', 'image', 'facebook_ur', 'twitter_url', 'linkedin_url', 'youtube_url', DB::raw('SUBSTRING(`description_' . $lang . '`, 1, 255) as text'))->orderBy('created_at', 'DESC')->take(10)->get();
        $speakersrecent = Speakers::orderBy('created_at', 'desc')->paginate(5);
        return view('frontend.speakers', ['speakersrecent' => $speakersrecent, 'speaker' => $speaker]);
    }

    public function events()
    {
        // $conference =Conference::paginate(10);
        // $conferencesrecent = Conference::orderBy('created_at', 'desc')->paginate(5);
        // return view('frontend.events', ['conference' => $conference,'conferencesrecent'=>$conferencesrecent]);
        $lang = \App::getLocale();

        $events = News::select('id', 'title_'. $lang . ' as title', 'user_image', DB::raw('SUBSTRING(`description_' . $lang . '`, 1, 255) as text'), 'tags', 'created_at')->where('cat_id', 2)->orderBy('created_at', 'DESC')->paginate(2);
        $eventresent = News::select('id', 'user_image', 'title_' . $lang . ' as title', 'created_at')->where('cat_id', 2)->orderBy('created_at', 'desc')->take(5)->get();
        return view('frontend.events', ['events' => $events, 'eventresent' => $eventresent]);
    }

    public function news()
    {
        $lang = \App::getLocale();

        $news = News::select('id', 'title_'. $lang . ' as title', 'user_image', DB::raw('SUBSTRING(`description_' . $lang . '`, 1, 500) as text'), 'tags', 'created_at')->where('cat_id', 1)->orderBy('created_at', 'DESC')->paginate(2);
        $newsresent = News::select('id', 'user_image', 'title_' . $lang . ' as title', 'created_at')->where('cat_id', 1)->orderBy('created_at', 'desc')->take(3)->get();
        return view('frontend.news', ['news' => $news, 'newsresent' => $newsresent]);
    }
}
