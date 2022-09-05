<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\ViewName;

class IndexController extends Controller
{
    public function home() 
    {
        return view('mobile.index'); 
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

    public function news1()
    {
        return view('mobile.news1');
    }

    public function news2()
    {
        return view('mobile.news2');
    }

    public function news3()
    {
        return view('mobile.news3');
    }
}
