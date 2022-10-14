<?php

namespace App\Http\Controllers\Employee\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$users = User::where('is_blocked','=',0)->orderBy('id','desc')->paginate(5);
        $users = User::select(
            'users.id as user_id',
            DB::raw('CONCAT(users.first_name, " ", users.last_name, " ", users.middle_name) as full_name'),
            'users.email as email',
            'users.phone as phone',
            'c.name_uz as country_name',
            'users.organization as organization',
            'p.name_uz as profession_name',
            'users.created_at as created_at',
            'users.gender as gender'
            )
        ->leftJoin('countries as c', 'users.country_id', '=', 'c.id')
        ->leftJoin('professions as p', 'users.profession_id', '=', 'p.id')
        ->where('users.is_blocked', '=', 0)
        ->orderBy('users.id', 'desc')
        ->paginate(100);
        return view('employee.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee.user.create');
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
            'first_name' => 'required',
            'last_name' => 'required',
         );

         $validator = Validator::make($data, $rule);

         if ($validator->fails()) {
             Session::flash('warning', $validator->messages());
             return redirect()->back();
         }

         $inputs = $request->all();
         if (!empty($inputs['id'])) {
             $users = User::findOrFail($inputs['id']);
         } else {
             $users = new User;
         }

         $users->first_name = $inputs['first_name'];
         $users->last_name = $inputs['last_name'];
         $users->middle_name = $inputs['middle_name'] ?? null;
         $users->gender = $inputs['gender'] ?? null;
         $users->email = $inputs['email'] ?? null;
         $users->phone = $inputs['phone'] ?? null;
         $users->country_id = $inputs['country_id'] ?? null;
         $users->profession_id = $inputs['profession_id'] ?? null;
         $users->organization = $inputs['organization'] ?? null;
         $users->password = Hash::make(Str::random(12));
         $users->save();

         if (!empty($inputs['id'])) {
            Session::flash('warning', __('ALL_CHANGES_SUCCESSFUL_SAVED'));
            return redirect('employee/user');
        } else {
            Session::flash('warning', __('ALL_SUCCESSFUL_SAVED'));
            return redirect('employee/user');
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
        // $user = User::find($id);
        // return view('admin.user.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('employee.user.edit')->with('user', $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $users)
    {
        $data = $request->except(array('_token'));
        $rule = array(
            'first_name' => 'required',
            'last_name' => 'required',
            'country_id' => 'required',
            'profession_id' => 'required',
            'organization' => 'required',
            'gender' => 'required',
         );

         $validator = Validator::make($data, $rule);

         if ($validator->fails()) {
             Session::flash('warning', $validator->messages());
             return redirect()->back();
         }

         $inputs = $request->all();
         if (!empty($inputs['id'])) {
             $users = User::findOrFail($inputs['id']);
         } else {
             $users = new User;
         }

         $users->first_name = $inputs['first_name'];
         $users->last_name = $inputs['last_name'];
         $users->middle_name = $inputs['middle_name'] ?? null;
         $users->gender = $inputs['gender'] ?? null;
         $users->email = $inputs['email'] ?? null;
         $users->phone = $inputs['phone'] ?? null;
         $users->country_id = $inputs['country_id'] ?? null;
         $users->profession_id = $inputs['profession_id'] ?? null;
         $users->organization = $inputs['organization'] ?? null;
         $users->save();

         if (!empty($inputs['id'])) {
            Session::flash('warning', __('ALL_CHANGES_SUCCESSFUL_SAVED'));
            return redirect('employee/user');
        } else {
            Session::flash('warning', __('ALL_SUCCESSFUL_SAVED'));
            return redirect('employee/user');
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
        $user=User::find($id);
        $user->is_blocked=1;
        $user->save();
        return redirect('employee/user')->with('warning', 'USER TABLES DELETED');
    }
}
