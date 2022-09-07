<?php

namespace App\Http\Controllers;

use App\Models\Archive\Archive;
use Illuminate\Http\Request;
use App\Models\UserTicket;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;


class UserTicketController extends Controller

{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $archives=Archive::all();
        $usertickets = UserTicket::paginate(5);
        $users = User::all();
        return view('admin.userticket.index', compact('usertickets', 'users', ));
    }
    public function is_active($id)
    {
        $update=UserTicket::find($id);
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
        $archives=Archive::all();
        return view('admin.userticket.create', compact('users','archives'));
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
          'user_id' => 'required',
          'archive_id' => 'required',
          'ticket_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
         );

         if (!file_exists('uploads/ticket_image')) {
            mkdir('uploads/ticket_image', 0777, true);
        }

         $validator = Validator::make($data, $rule);

         if ($validator->fails()) {
             Session::flash('warning', $validator->messages());
             return redirect()->back();
         }

         $inputs = $request->all();
         if (!empty($inputs['id'])) {
             $usertickets = UserTicket::findOrFail($inputs['id']);
         } else {
            $usertickets = new UserTicket;
         }

         $usertickets->user_id = $inputs['user_id'];
        $usertickets->archive_id = $inputs['archive_id'];
        /* shunchaki default qiymat berildi */

         $usertickets->ticket_id = "464564";




         if ($request->hasFile('ticket_image')) {
            $file = $request->file('ticket_image');
            $ex = $file->getClientOriginalExtension();
            $imageName = md5(rand(100, 999999) . microtime()) . "." . $ex;
            $file->move(public_path('uploads/ticket_image'), $imageName);
            // unlink($userticket->ticket_image);
            $data['image'] = 'uploads/ticket_image/' . $imageName;
          }

         $usertickets->user_image =$data['image'];
         $usertickets->save();

         if (!empty($inputs['id'])) {
             Session::flash('warning', __('ALL_CHANGES_SUCCESSFUL_SAVED'));
             return redirect('admin/userticket');
         } else {
             Session::flash('warning', __('ALL_SUCCESSFUL_SAVED'));
             return redirect('admin/userticket');
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
        $userticket = UserTicket::find($id);
        $users = User::all();
        return view('admin.userticket.show', [
            'userticket' => $userticket,
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
        $userticket = UserTicket::find($id);
        $archives=Archive::all();
        $users = User::all();
        return view('admin.userticket.edit', [
            'userticket' => $userticket,
            'users' => $users,
            'archives'=>$archives,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserTicket $usertickets)
    {
        $data = $request->except(array('_token'));
        $rule = array(
            'id' => 'required',
            'user_id' => 'required',
            'archive_id' => 'required',
         );

         if (!file_exists('uploads/ticket_image')) {
            mkdir('uploads/ticket_image', 0777, true);
        }

         $validator = Validator::make($data, $rule);

         if ($validator->fails()) {
             Session::flash('warning', $validator->messages());
             return redirect()->back();
         }

         $inputs = $request->all();
         if (!empty($inputs['id'])) {
             $usertickets = UserTicket::findOrFail($inputs['id']);
         } else {
            $usertickets = new UserTicket;
         }


         $usertickets->user_id = $inputs['user_id'];
        $usertickets->archive_id = $inputs['archive_id'];
         if ($request->hasFile('ticket_image')) {
            $rule = array(
                'ticket_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
             );
            $file = $request->file('ticket_image');
            $ex = $file->getClientOriginalExtension();
            $imageName = md5(rand(100, 999999) . microtime()) . "." . $ex;
            $file->move(public_path('uploads/ticket_image'), $imageName);
            // unlink($userticket->ticket_image);
            $data['image'] = 'uploads/ticket_image/' . $imageName;
            $usertickets->user_image = $data['image'];
          }
  /* shunchaki default qiymat berildi */

  $usertickets->ticket_id = "464564";

         $usertickets->save();

         if (!empty($inputs['id'])) {
             Session::flash('warning', __('ALL_CHANGES_SUCCESSFUL_SAVED'));
             return redirect('admin/userticket');
         } else {
             Session::flash('warning', __('ALL_SUCCESSFUL_SAVED'));
             return redirect('admin/userticket');
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserTicket $userticket)
    {
    //    unlink('uploads/ticket_image/' .$userticket->ticket_image);
    $eduhub = UserTicket::findOrFail($userticket->id);
    $eduhub->delete();

       return redirect('admin/userticket')->with('warning', 'USERTICKET_TABLES_DELETED');
    }
}

