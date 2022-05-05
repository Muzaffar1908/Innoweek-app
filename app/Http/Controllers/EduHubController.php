<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EduHubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("index");
    }
    public function about()
    {
        return view("pages.about");
    }
    public function courses()
    {
        return view("course.course");
    }

public function course_single()
{
    return view("course.course_single");
}
public function course_search()
{
    return view("course.course_search");
}
public function course_category()
{
    return view("course.course_category");
}
    public function instructor()
    {
        return view("inctructor.instructor");
    }
    public function instructor_single()
    {
        return view("inctructor.instructor-single");
    }
    public function teams()
    {
        return view("pages.teams");
    }
    public function police()
    {
        return view("pages.police");
    }
    public function blog()
    {
        return view("blog.blog");
    }
    public function contact()
    {
        return view("pages.contact");
    }
    public function card()
    {
        return view("korzinka.card");
    }
    public function card_checkout()
    {
        return view("korzinka.card_checkout");
    }
    public function signin()
    {
        return view("sign.sign-in");
    }
    public function forgotPassword()
    {
        return view("sign.forget-password");
    }
    public function signup()
    {
        return view("sign.sign-up");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
