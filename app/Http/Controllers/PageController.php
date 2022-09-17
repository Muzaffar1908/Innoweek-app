<?php

namespace App\Http\Controllers;

use App\Models\Archive\Archive;
use App\Models\Archive\Speakers;
use App\Models\Conference;
use App\Models\Innoweek;
use App\Models\News\Galeries;
use App\Models\News\News;
use App\Models\Partner;
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

        $promo = Conference::all();

        $news = News::all();

        $speakers = Speakers::all();

        $galleries = Galeries::all();

        $partners = Partner::all();

        $innoweeks = Innoweek::first();

        $events = Conference::all();
    
        return view('frontend.app', ['condate' => $condate,'condate_data'=>$condate_data, 'promo' => $promo, 'news' => $news, 'speakers' => $speakers, 'galleries' => $galleries, 'partners' => $partners, 'innoweeks' => $innoweeks, 'events' => $events]);


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


        return view('frontend.app', ['condates' => $condates,'condate' => $condate]);
    }


    public function newsShow($id)
    {
        $innoweeks = Innoweek::first();
    
        $news = News::where(['id' => $id])->get();
        return view('frontend.partials.newshow', compact('news','innoweeks'));
    }

    public function eventShow($id)
    {
        $innoweeks = Innoweek::first();

        $events = Conference::where(['id' => $id])->get();
        return view('frontend.partials.eventshow', compact('events', 'innoweeks'));
    }

    public function speakerShow($id)
    {
        $innoweeks = Innoweek::first();
        $speakers = Speakers::where(['id' => $id])->first();
        return view('frontend.partials.speakershow', compact('speakers', 'innoweeks'));
    }
}
