<?php

namespace App\Http\Controllers\Employee\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Mail;
use App\Mail\RegisterMail;
use App\Models\UserTicket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;


class UserController extends Controller
{
    private const SMS_USER = "zulfiqorrashidov@gmail.com";
    private const SMS_PASS = "exsRuNL4aRCzJb3YIV3EIFXlV4WgdjpeKHQn0x97";
    public function SendSMSVerify($phone, $code)
    {
        $login = self::SMS_USER;
        $password = self::SMS_PASS;
        $token = self::getSMSToken($login, $password);
        if (!empty($token)) {
            $smsBody = [
                'mobile_phone' => '998' . $phone,
                'message' => "Tabriklaymiz. Siz INNOWEEK haftaligi mehmoni sifatida ro'yxatdan o'tdingiz. \n Sizning kirish kodingiz:: " . $code . "\n Bilet manzili: " . url('/') . '/check/ticket/' . $code,
            ];
            $msgSend = Http::timeout(30)
                ->withOptions([
                    'verify' => false,
                ])
                ->withHeaders([
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                    'Authorization' => "Bearer " . $token,
                ])
                ->post("http://notify.eskiz.uz/api/message/sms/send", $smsBody)->object();
            if (isset($msgSend) && $msgSend->status == 'waiting') {
                return true;
            }
            return false;
        }
        return false;
    }

    private function getSMSToken($username, $password)
    {
        $authOperator = Http::accept('application/json')->timeout(15)->withOptions([
            'verify' => false,
        ])
            ->post('http://notify.eskiz.uz/api/auth/login', [
                'email' => $username,
                'password' => $password,
            ]);
        //$cookie = $authOperator->cookies()->getCookieByName('TPEAP_SESSIONID');
        //setcookie("TPEAP_SESSIONID", $cookie->getValue(), time() + 3600);
        return $authOperator->object()->data->token;
    }
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
    public function index(Request $req)
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
        $inputs = $request->all();
        $rule = [
            'first_name' => 'required',
            'last_name' => 'required',
            //'email' => 'required',
            //'phone' => 'required',
            'country_id' => 'required',
        ];
        $contains = Str::contains($inputs['phone_or_email'], ['@']);

        if ($contains) {
            $data['email'] = $data['phone_or_email'];
            $inputs['email'] = $inputs['phone_or_email'];
            unset($inputs['phone_or_email']);
            unset($data['phone_or_email']);
            $rule['email'] = 'required|string|email|max:255|unique:users';
            $registered = User::where('email', $inputs['email'])->first();
        } else {
            if (Str::length($inputs['phone_or_email']) < 9) {
                session([
                    'warning' => "Iltimos tog'ri telefon raqam kiriting",
                ]);
                //session()->has('warning')
                //session()->get('warning')
                //\Session::flash('warning', "Iltimos tog'ri telefon raqam kiriting");
                return \Redirect::back();
            }
            $data['phone'] = Str::substr($data['phone_or_email'], -9);
            $inputs['phone'] = Str::substr($inputs['phone_or_email'], -9);
            unset($inputs['phone_or_email']);
            unset($data['phone_or_email']);
            $rule['phone'] = 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9|max:13|unique:users';
            $registered = User::where('phone', $inputs['phone'])->first();
        }
        $validator = Validator::make($data, $rule);
        if ($validator->fails()) {
            if ($registered) {
                session([
                    'warning' => "You already have an account. Please check your ticket via the check ticket link at the bottom of the registration form.",
                ]);
            } else {
                session([
                    'warning' => $validator->messages(),
                ]);
                return redirect()->back();
            }
        }

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
        $users->country_id = $inputs['country_id'] ?? 251;
        $users->profession_id = $inputs['profession_id'] ?? null;
        $users->organization = $inputs['organization'] ?? null;
        $users->password = Hash::make(Str::random(12));
        $users->save();

        if (!empty($inputs['id'])) {
            session([
                'warning' => "Ma'lumotlar saqlandi, Sizning bilet raqamingiz: ",
            ]);
            return redirect('employee/user');
        } else {
            $userticket = new UserTicket();
            $userticket->user_id = $users->id;
            $userticket->ticket_id = $users->id + 1000000;
            $userticket->archive_id = 1;
            $userticket->save();

            if (!empty($inputs['email'])) {
                $mailData = [
                    //'title' => 'Mail from ItSolutionStuff.com',
                    'ticket_id' => $userticket->ticket_id,
                    //'code' => $userticket->ticket_id,
                ];

                Mail::to($inputs['email'])->send(new RegisterMail($mailData));
                if (Mail::flushMacros()) {
                    session([
                        'warning' => "Elektron pochta manziliga xabar yuborishda xatolik yuz berdi.",
                    ]);
                } else {
                    session([
                        'verifyCode' => $userticket->ticket_id,
                    ]);
                    session([
                        'warning' => "Ma'lumotlar saqlandi, Sizning bilet raqamingiz: " . $userticket->ticket_id . ". Iltimos ushbu raqamni kirish vaqtida ruxsat olish uchun foydalaning!",
                    ]);
                    return redirect('employee/user');
                }
            }
            $sentSMS = self::SendSMSVerify($inputs['phone'], $userticket->ticket_id);
            if ($sentSMS) {
                $inputs['phone'];
                session([
                    'warning' => "Ma'lumotlar saqlandi, Sizning bilet raqamingiz: " . $userticket->ticket_id . ". Iltimos ushbu raqamni kirish vaqtida ruxsat olish uchun foydalaning!",
                ]);
                return redirect('employee/user');
            }
            session([
                'warning' => "Ma'lumotlar saqlandi, Sizning bilet raqamingiz: " . $userticket->ticket_id . ". Iltimos ushbu raqamni kirish vaqtida ruxsat olish uchun foydalaning!",
            ]);
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
            'email' => 'required',
            'phone' => 'required',
            'country_id' => 'required',
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
        $users->email = $inputs['email'];
        $users->phone = $inputs['phone'];
        $users->country_id = $inputs['country_id'];
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
        // $user=User::find($id);
        // $user->is_blocked=1;
        // $user->save();
        // return redirect('employee/user')->with('warning', 'USER TABLES DELETED');
    }
}
