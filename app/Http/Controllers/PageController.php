<?php

namespace App\Http\Controllers;

use App\Models\News\News;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
       //    $news = News::paginate(5);

       return view('frontend.app');


    }
}
