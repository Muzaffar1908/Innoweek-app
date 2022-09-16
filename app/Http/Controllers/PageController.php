<?php

namespace App\Http\Controllers;

use App\Models\Archive\Archive;
use App\Models\Conference;

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


        $condate_data = Conference::where(['archive_id'=>'1'])->get();



        return view('frontend.app', ['condate' => $condate,'condate_data'=>$condate_data]);


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


        return view('frontend.app', ['condates' => $condates,'condate'=>$condate]);


    }
}
