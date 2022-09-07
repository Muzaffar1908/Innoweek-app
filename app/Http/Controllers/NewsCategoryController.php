<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News\NewsCategory;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class NewsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news_categories = NewsCategory::paginate(5);
        $users = User::all();
        return view('admin.news_category.index', compact('news_categories', 'users'));
    }


    public function is_active($id)
    {
        $update=NewsCategory::find($id);
        if($update->is_active==1){
            $update->is_active=0;
        }else{
            $update->is_active=1;
        }
        $update->save();
        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('admin.news_category.create')->with('users', $users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except(array('_token'));
        $rule = array(
        'title_uz' => 'required',
        );

        $validator = Validator::make($data, $rule);

        if ($validator->fails()) {
            Session::flash('warning', $validator->messages());
            return redirect()->back();
        }

        $inputs = $request->all();
        if (!empty($inputs['id'])) {
            $news_categories = NewsCategory::findOrFail($inputs['id']);
        } else {
            $news_categories = new NewsCategory;
        }

        $news_categories->user_id = $inputs['user_id'];
        $news_categories->parent_id = $inputs['id'];
        $news_categories->title_uz = $inputs['title_uz'];
        $news_categories->title_ru = $inputs['title_ru'];
        $news_categories->title_en = $inputs['title_en'];
        $news_categories->save();

        if (!empty($inputs['id'])) {
            Session::flash('warning', __('ALL_CHANGES_SUCCESSFUL_SAVED'));
            return redirect('admin/news_category');
        } else {
            Session::flash('warning', __('ALL_SUCCESSFUL_SAVED'));
            return redirect('admin/news_category');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news_category = NewsCategory::find($id);
        $users = User::all();
        return view('admin.news_category.show', [
            'news_category' => $news_category,
            'users' => $users,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news_categories = NewsCategory::find($id);
        $users = User::all();
        return view('admin.news_category.edit', [
            'news_categories' => $news_categories,
            'users' => $users,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewsCategory $news_categories)
    {
        $data = $request->except(array('_token'));
        $rule = array(
        'title_uz' => 'required',
        );

        $validator = Validator::make($data, $rule);

        if ($validator->fails()) {
            Session::flash('warning', $validator->messages());
            return redirect()->back();
        }

        $inputs = $request->all();
        if (!empty($inputs['id'])) {
            $news_categories = NewsCategory::findOrFail($inputs['id']);
        } else {
            $news_categories = new NewsCategory;
        }

        $news_categories->user_id = $inputs['user_id'];
        $news_categories->parent_id = $inputs['parent_id'];
        $news_categories->title_uz = $inputs['title_uz'];
        $news_categories->title_ru = $inputs['title_ru'];
        $news_categories->title_en = $inputs['title_en'];
        $news_categories->save();

        if (!empty($inputs['id'])) {
            Session::flash('warning', __('ALL_CHANGES_SUCCESSFUL_SAVED'));
            return redirect('admin/news_category');
        } else {
            Session::flash('warning', __('ALL_SUCCESSFUL_SAVED'));
            return redirect('admin/news_category');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        NewsCategory::destroy($id);
        return redirect('admin/news_category')->with('warning', 'NEWS CATEGORY TABLES DELETED');
    }
}
