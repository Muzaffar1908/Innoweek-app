<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\User;
//use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use Validator;
use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function index()
    {
        $data = null;

        if (session()->has('userID')) {
            $data = User::findOrFail(session->get('userID'));
        }
        return view('frontend.auth.check', compact('data'));
    }

    public function ticketDownload(Request $req)
    {
        $data = [];

        if (session()->has('userID')) {
            $data = User::findOrFail(session->get('userID'));
        }
      return view('frontend.ticket', compact('data'));
    }

    public function checkTicket(Request $request)
    {
        $data = \Request::except(array('_token'));
        $inputs = $request->all();
        $rule = [];
        $contains = Str::contains($inputs['phone_or_email'], ['@']);
        if ($contains) {
            $data['email'] = $data['phone_or_email'];
            $inputs['email'] = $inputs['phone_or_email'];
            unset($inputs['phone_or_email']);
            unset($data['phone_or_email']);
            $rule['email'] = 'required|string|email|max:255';
        } else {
            if (Str::length($inputs['phone_or_email']) < 9) {
                \Session::flash('warning', "Iltimos tog'ri telefon raqam kiriting");
                return \Redirect::back();
            }
            $data['phone'] = Str::substr($data['phone_or_email'], -9);
            $inputs['phone'] = Str::substr($inputs['phone_or_email'], -9);
            unset($inputs['phone_or_email']);
            unset($data['phone_or_email']);
            $rule['phone'] = 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9|max:13';
        }

        $validator = Validator::make($data, $rule);
        if ($validator->fails()) {
            \Session::flash('warning', $validator->messages());
            return \Redirect::back();
            // return redirect()->back()->withErrors($validator->messages());
        }
        //dd($request->all());
        if (!empty($inputs['email'])) {
            $user = User::select('ut.id as ticketId')->where(['email' => $inputs['email']])
                ->leftJoin('user_tickets as ut', 'ut.user_id', '=', 'users.id')
                ->first();
            if ($user) {
                session(['userticket' => $user->ticketId]);
                \Session::flash('warning', __('ALL_SUCCESSFUL_SAVED'));
                return redirect()->route('d-login');
            }
        } else {
            $user = User::select('ut.id as ticketId')->where(['phone' => $inputs['phone']])
                ->leftJoin('user_tickets as ut', 'ut.user_id', '=', 'users.id')
                ->first();
            if ($user) {
                session(['userticket' => $user->ticketId]);
                \Session::flash('warning', __('ALL_SUCCESSFUL_SAVED'));
                return redirect()->route('d-login');
            }
            \Session::flash('warning', "Ma'lumotlar xato kiritilgan...");
            return \Redirect::back();
        }
        \Session::flash('warning', "Ma'lumotlar xato kiritilgan...");
        return \Redirect::back();
    }
}
