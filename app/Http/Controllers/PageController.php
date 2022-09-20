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

        $condate = DB::table('conferences')
            ->select(DB::raw('DATE(started_at) as date'))
            ->groupBy('date')
            ->get();


        $condate_data = Conference::all();



        $news = News::where('cat_id', 1)->orderBy('created_at', 'desc')->paginate(3);
        $news_event = News::where('cat_id', 2)->orderBy('created_at', 'desc')->paginate(5);
        $speakers = Speakers::all();
        $galleries = Galeries::all();
        $partners = Partner::all();
        $innoweeks = Innoweek::first();

        $events = Conference::paginate(3);

        $promo=Promo::paginate(4);

        return view('frontend.app', ['condate' => $condate, 'condate_data' => $condate_data, 'promo' => $promo, 'news' => $news, 'news_event' => $news_event,'speakers' => $speakers, 'galleries' => $galleries, 'partners' => $partners, 'innoweeks' => $innoweeks, 'events' => $events]);

    }


    public function register()
    {
        $innoweeks = Innoweek::first();
        return view('frontend.register', ['innoweeks' => $innoweeks]);
    }

    public function qr()
    {
        $innoweeks = Innoweek::first();
        return view('frontend.qr', ['innoweeks' => $innoweeks]);
    }

    public function schedule($id)
    {
        $condate = DB::table('conferences')
            ->select(DB::raw('DATE(started_at) as date'))
            ->groupBy('date')
            ->get();
        $condates = DB::table('conferences')
            ->whereDate('started_at', $id)
            ->get();


        return view('frontend.app', ['condates' => $condates, 'condate' => $condate]);
    }


    public function newsShow($id)
    {
        $innoweeks = Innoweek::first();

        $news = News::where(['id' => $id])->first();

        $newsx = News::orderBy('created_at', 'desc')->paginate(5);

        return view('frontend.newshow', compact('news', 'innoweeks', 'newsx'));
    }

    public function eventShow($id)
    {


        $events = Conference::where(['id' => $id])->first();

        $eventsrecent = Conference::orderBy('created_at', 'desc')->paginate(5);

        return view('frontend.eventshow', compact('events',  'eventsrecent'));
    }

    public function speakerShow($id)
    {

        $speakers = Speakers::where(['id' => $id])->first();

        return view('frontend.speakershow', compact( 'speakers'));
    }

    public function speakers()
    {
        $speaker = Speakers::paginate(10);
        $speakersrecent = Speakers::orderBy('created_at', 'desc')->paginate(5);
        return view('frontend.speakers', ['speakersrecent' => $speakersrecent,'speaker'=>$speaker]);
    }
    public function events()
    {
        // $conference =Conference::paginate(10);
        // $conferencesrecent = Conference::orderBy('created_at', 'desc')->paginate(5);
        // return view('frontend.events', ['conference' => $conference,'conferencesrecent'=>$conferencesrecent]);
        $news = News::where('cat_id', 2)->paginate(10);
        $newsresent = News::where('cat_id', 2)->orderBy('created_at', 'desc')->paginate(5);
        return view('frontend.events', ['news' => $news,'newsresent'=>$newsresent]);
    }
    public function news()
    {
        $news = News::where('cat_id', 1)->paginate(10);
        $newsresent = News::where('cat_id', 2)->orderBy('created_at', 'desc')->paginate(5);
        return view('frontend.news', ['news' => $news,'newsresent'=>$newsresent]);
    }

}
