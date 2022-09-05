<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(5);
        return view('admin.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    public function profileUpdate(Request $request ,$id)
    {
        $data = $request->except(array('_token'));
        $rule = array(
          'user_image' => 'required',
          'first_name' => 'required',
          'last_name' => 'required',
          'gender' => 'required',
          'middle_name' => 'required',
          'email' => 'required',
          'phone' => 'required',
       
         );

        if (!file_exists('uploads/users')) {
            mkdir('uploads/users', 0777, true);
        }

        if (!file_exists('uploads/users')) {
            mkdir('uploads/users', 0777, true);
        }

         $validator = Validator::make($data, $rule);

         if ($validator->fails()) {
             Session::flash('warning', $validator->messages());
             return redirect()->back();
         }

         $inputs = $request->all();
         if (!empty($id)) {
             $users = User::findOrFail($id);
         } else {
             $users = new User;
         }

         $users->first_name = $inputs['first_name'];
         $users->last_name = $inputs['last_name'];
         $users->middle_name = $inputs['middle_name'];
         $users->gender = $inputs['gender'];
         $users->email = $inputs['email'];
         $users->phone = $inputs['phone'];
         $users->password =" 0";
    

         if ($request->hasFile('user_image')) {
            $file = $request->file('user_image');
            $ex = $file->getClientOriginalExtension();
            $imageName = md5(rand(100, 999999) . microtime()) . "." . $ex;
            $file->move(public_path('uploads/config'), $imageName);
            // unlink($userticket->ticket_image);
            $data['user_image'] = 'uploads/config/' . $imageName;
        }

          $users->user_image = $data['user_image'];

         $users->save();

         if (!empty($inputs['id'])) {
            Session::flash('warning', __('ALL_CHANGES_SUCCESSFUL_SAVED'));
            return redirect()->route('mobile-v');
        } else {
            Session::flash('warning', __('ALL_SUCCESSFUL_SAVED'));
            return redirect('mobile-v');
        }
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
          'gender' => 'required',
          'birth_date' => 'required',
          'email' => 'required',
          'phone' => 'required',
          'password' => 'required',
         );

        if (!file_exists('uploads/users')) {
            mkdir('uploads/users', 0777, true);
        }

        if (!file_exists('uploads/users')) {
            mkdir('uploads/users', 0777, true);
        }

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
         $users->middle_name = $inputs['middle_name'];
         $users->gender = $inputs['gender'];
         $users->birth_date = $inputs['birth_date'];
         $users->user_image = $inputs['user_image'];
         $users->address = $inputs['address'];
         $users->balance = $inputs['balance'];
         $users->email = $inputs['email'];
         $users->phone = $inputs['phone'];
         $users->password = $inputs['password'];
         $users->provider_name = $inputs['provider_name'];
         $users->provider_id = $inputs['provider_id'];

         if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ex = $file->getClientOriginalExtension();
            $imageName = md5(rand(100, 999999) . microtime()) . "." . $ex;
            $file->move(public_path('uploads/users'), $imageName);
            // unlink($userticket->ticket_image);
            $data['image'] = 'uploads/users/' . $imageName;
        }

         $users->save();

         if (!empty($inputs['id'])) {
            Session::flash('warning', __('ALL_CHANGES_SUCCESSFUL_SAVED'));
            return redirect('admin/user');
        } else {
            Session::flash('warning', __('ALL_SUCCESSFUL_SAVED'));
            return redirect('admin/user');
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
        $user = User::find($id);
        return view('admin.user.show')->with('user', $user);
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
        return view('admin.user.edit')->with('user', $user);
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
          'gender' => 'required',
          'birth_date' => 'required',
          'email' => 'required',
          'phone' => 'required',
          'password' => 'required',
         );

        if (!file_exists('uploads/users')) {
            mkdir('uploads/users', 0777, true);
        }

        if (!file_exists('uploads/users')) {
            mkdir('uploads/users', 0777, true);
        }

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
         $users->middle_name = $inputs['middle_name'];
         $users->gender = $inputs['gender'];
         $users->birth_date = $inputs['birth_date'];
         $users->user_image = $inputs['user_image'];
         $users->address = $inputs['address'];
         $users->balance = $inputs['balance'];
         $users->email = $inputs['email'];
         $users->phone = $inputs['phone'];
         $users->password = $inputs['password'];
         $users->provider_name = $inputs['provider_name'];
         $users->provider_id = $inputs['provider_id'];

         if ($request->hasFile('image')) {
            $file = $request->file('image');
            $ex = $file->getClientOriginalExtension();
            $imageName = md5(rand(100, 999999) . microtime()) . "." . $ex;
            $file->move(public_path('uploads/users'), $imageName);
            // unlink($userticket->ticket_image);
            $data['image'] = 'uploads/users/' . $imageName;
        }

         $users->save();

         if (!empty($inputs['id'])) {
            Session::flash('warning', __('ALL_CHANGES_SUCCESSFUL_SAVED'));
            return redirect('admin/user');
        } else {
            Session::flash('warning', __('ALL_SUCCESSFUL_SAVED'));
            return redirect('admin/user');
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
        User::destroy($id);
        return redirect('admin/user')->with('warning', 'USER TABLES DELETED');
    }
}
