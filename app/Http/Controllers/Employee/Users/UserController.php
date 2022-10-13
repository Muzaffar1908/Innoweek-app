<?php

namespace App\Http\Controllers\Employee\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

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
            DB::raw('CONCAT(users.first_name, " ", users.last_name) as full_name'),
            'users.email as email',
            'users.phone as phone',
            'c.name_uz as country_name',
            'users.organization as organization',
            'p.name_uz as profession_name',
            'users.created_at as created at',
            'users.gender as gender'
            )
        ->leftJoin('countries as c', 'users.country_id', '=', 'c.id')
        ->leftJoin('professions as p', 'users.profession_id', '=', 'p.id')
        ->where('users.is_blocked', '=', 0)
        ->orderBy('users.id', 'desc')
        ->paginate(5);
        return view('employee.user.index', compact('users'));
    }

    
    public function is_active($id)
    {
        $update=User::find($id);
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
        return view('admin.user.create');
    }

    public function profileUpdate(Request $request ,$id)
    {
        $data = $request->except(array('_token'));
        $rule = array(
          'first_name' => 'required',
          'last_name' => 'required',
          'gender' => 'required',
          'phone' => 'required',
         );

        if (!file_exists('upload/config')) {
            mkdir('upload/config', 0777, true);
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
         $users->password ="0";
         $users->country_id = $inputs['country_id'] ?? null;
         $users->profession_id = $inputs['profession_id'] ?? null;
         $users->organization = $inputs['organization'] ?? null;



         if ($request->hasFile('user_image')) {
            $rule = array(
                'user_image' => 'required',
               );
            $file = $request->file('user_image');
            $ex = $file->getClientOriginalExtension();
            $imageName = md5(rand(100, 999999) . microtime()) . "." . $ex;
            $file->move(public_path('upload/config'), $imageName);
            // unlink($userticket->ticket_image);
            $data['user_image'] = 'upload/config/' . $imageName;
            $users->user_image = $data['user_image'];
        }



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

        if (!file_exists('upload/config')) {
            mkdir('upload/config', 0777, true);
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
         $users->country_id = $inputs['country_id'];
         $users->profession_id = $inputs['profession_id'];
         $users->organization = $inputs['organization'];

         if ($request->hasFile('user_image')) {
            $file = $request->file('user_image');
            $ex = $file->getClientOriginalExtension();
            $imageName = md5(rand(100, 999999) . microtime()) . "." . $ex;
            $file->move(public_path('upload/config'), $imageName);
            // unlink($userticket->ticket_image);
            $data['user_image'] = 'upload/config/' . $imageName;
        }
         $users->user_image ='upload/config/'.$imageName;
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
         );

        if (!file_exists('upload/config')) {
            mkdir('upload/config', 0777, true);
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

         if ($request->hasFile('user_image')) {
            $file = $request->file('user_image');
            $ex = $file->getClientOriginalExtension();
            $imageName = md5(rand(100, 999999) . microtime()) . "." . $ex;
            $file->move(public_path('upload/config'), $imageName);
            // unlink($userticket->ticket_image);
            $data['user_image'] = 'upload/config/' . $imageName;
        }

         $users->first_name = $inputs['first_name'];
         $users->last_name = $inputs['last_name'];
         $users->middle_name = $inputs['middle_name'];
         $users->gender = $inputs['gender'];
         $users->birth_date = $inputs['birth_date'];
        //  $users->user_image = $inputs['user_image'];
         $users->address = $inputs['address'];
         $users->balance = $inputs['balance'];
         $users->email = $inputs['email'];
         $users->phone = $inputs['phone'];
         $users->provider_name = $inputs['provider_name'];
         $users->provider_id = $inputs['provider_id'];
         $users->country_id = $inputs['country_id'];
         $users->profession_id = $inputs['profession_id'];
         $users->organization = $inputs['organization'];

        //  $users->user_image = 'upload/config/'.$imageName;
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
        $user=User::find($id);
        $user->is_blocked=1;
        $user->save();
        return redirect('admin/user')->with('warning', 'USER TABLES DELETED');
    }
}
