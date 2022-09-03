<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function home() 
    {
        return view('mobile.index'); 
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
        return view('moblie.calendar');
    }
}
