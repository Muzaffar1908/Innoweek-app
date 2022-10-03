<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use App\Models\UserTicket;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Support\Str;
use Auth;
use Mail;
use App\Mail\RegisterMail;
use Illuminate\Support\Facades\Hash;
//use Laravel\Socialite\Facades\Socialite;
use Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    private const SMS_USER = "zulfiqorrashidov@gmail.com";
    private const SMS_PASS = "exsRuNL4aRCzJb3YIV3EIFXlV4WgdjpeKHQn0x97";
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::MOBILE_HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function LoginPage()
    {
        return view('mobile.auth.login');
    }

    public function login(Request $request)
    {
        $data =  \Request::except(array('_token'));
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
            $user = User::where(['email' => $inputs['email']])->first();
            if (!empty($user)) {
                $verify_code = rand(1000, 9999);
                $mailData = [
                    //'title' => 'Mail from ItSolutionStuff.com',
                    //'body' => 'This is for testing email using smtp.',
                    'code' => $verify_code,
                ];

                Mail::to($inputs['email'])->send(new RegisterMail($mailData));
                if (Mail::flushMacros()) {
                    \Session::flash('warning', "Ma'lumotlar xato kiritilgan...");
                    return \Redirect::back();
                } else {
                    session([
                        'verifyCode' => $verify_code,
                        'userID' => $user->id,
                    ]);
                    \Session::flash('warning', __('ALL_SUCCESSFUL_SAVED'));
                    return redirect()->route('m-verify');
                }
            }
        } else {
            $user = User::where(['phone' => $inputs['phone']])->first();
            if (!empty($user)) {
                $sentSMS = self::SendSMSVerify($user->phone);
                if ($sentSMS) {
                    session([
                        'userID' => $user->id,
                    ]);
                    \Session::flash('warning', __('ALL_SUCCESSFUL_SAVED'));
                    return redirect()->route('m-verify');
                }
                \Session::flash('warning', "Ma'lumotlar xato kiritilgan...");
                return \Redirect::back();
            }
            \Session::flash('warning', "Ma'lumotlar xato kiritilgan...");
            return \Redirect::back();
        }
        \Session::flash('warning', "Ma'lumotlar xato kiritilgan...");
        return \Redirect::back();
    }

    public function RegisterPage()
    {
        return view('mobile.auth.register');
    }

    public function register(Request $request)
    {
        $data =  \Request::except(array('_token'));
        $inputs = $request->all();
        $rule = [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            //'email' => 'required|string|email|max:255|unique:users',
            //'password' => 'required|string|min:8',
        ];
        $contains = Str::contains($inputs['phone_or_email'], ['@']);
        if ($contains) {
            $data['email'] = $data['phone_or_email'];
            $inputs['email'] = $inputs['phone_or_email'];
            unset($inputs['phone_or_email']);
            unset($data['phone_or_email']);
            $rule['email'] = 'required|string|email|max:255|unique:users';
        } else {
            if (Str::length($inputs['phone_or_email']) < 9) {
                \Session::flash('warning', "Iltimos tog'ri telefon raqam kiriting");
                return \Redirect::back();
            }
            $data['phone'] = Str::substr($data['phone_or_email'], -9);
            $inputs['phone'] = Str::substr($inputs['phone_or_email'], -9);
            unset($inputs['phone_or_email']);
            unset($data['phone_or_email']);
            $rule['phone'] = 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:9|max:13|unique:users';
        }

        $validator = Validator::make($data, $rule);
        if ($validator->fails()) {
            \Session::flash('warning', $validator->messages());
            return \Redirect::back();
            // return redirect()->back()->withErrors($validator->messages());
        }
        //dd($request->all());
        if (!empty($inputs['id'])) {
            $user = User::findOrFail($inputs['id']);
        } else {
            $user = new User;
        }

        $user->first_name = $inputs['first_name'];
        $user->last_name = $inputs['last_name'];
        $user->email = $inputs['email'] ?? null;
        $user->phone = $inputs['phone'] ?? null;
        $user->birth_date = Carbon::parse($inputs['birth_date']);
        $user->gender = $inputs['gender'] ?? 1;
        $user->country_id = $request->has('country_id') && $inputs['country_id'] ? $inputs['country_id'] : null;
        $user->profession_id = $request->has('profession_id') && $inputs['profession_id'] ? $inputs['profession_id'] : null;
        $user->organization = $request->has('organization') && $inputs['organization'] ? $inputs['organization'] : null;
        $user->birth_date = Carbon::parse($inputs['birth_date']);
        $user->password = Hash::make(Str::random(12));

        if (!empty($inputs['email'])) {
            $verify_code = rand(1000, 9999);
            $mailData = [
                //'title' => 'Mail from ItSolutionStuff.com',
                //'body' => 'This is for testing email using smtp.',
                'code' => $verify_code,
            ];

            Mail::to($inputs['email'])->send(new RegisterMail($mailData));
            if (Mail::flushMacros()) {
                \Session::flash('warning', "Ma'lumotlar xato kiritilgan...");
                return \Redirect::back();
            } else {
                $user->save();
                $userticket = new UserTicket();
                $userticket->user_id = $user->id;
                $userticket->ticket_id = $user->id + 1000000;
                $userticket->archive_id = 1;
                $userticket->save();
                session([
                    'verifyCode' => $verify_code,
                    'userID' => $user->id,
                ]);
                \Session::flash('warning', __('ALL_SUCCESSFUL_SAVED'));
                return redirect()->route('m-verify');
            }
        }

        $sentSMS = self::SendSMSVerify($user->phone);
        if ($sentSMS) {
            $user->save();
            $userticket = new UserTicket();
            $userticket->user_id = $user->id;
            $userticket->ticket_id = $user->id + 1000000;
            $userticket->archive_id = 1;
            //        @dd($userticket->all());
            $userticket->save();
            session([
                'userID' => $user->id,
            ]);
            \Session::flash('warning', __('ALL_SUCCESSFUL_SAVED'));
            return redirect()->route('m-verify');
        }


        \Session::flash('warning', "Ma'lumotlar xato kiritilgan...");
        return \Redirect::back();

        // UserRole::create([
        //     'user_id' => $user->id,
        //     'x_roles_id' => 6,
        // ]);
    }

    public function VerifyPage()
    {
        return view('mobile.auth.verify');
    }

    public function VerifMessage(Request $req)
    {
        $inputs = $req->all();
        $codeSession = session()->get('verifyCode');
        $userID = session()->get('userID');
        if (isset($inputs['code']) && $inputs['code'] == $codeSession) {
            Auth::loginUsingId($userID, $remember = true);
            return redirect()->route('m-home');
        }
        return redirect()->route('m-login');
    }

    public function SendSMSVerify($phone)
    {
        $login = self::SMS_USER;
        $password = self::SMS_PASS;
        $token = self::getSMSToken($login, $password);
        $verify_code = rand(1000, 9999);
        if (!empty($token)) {
            $smsBody = [
                'mobile_phone' => '998' . $phone,
                'message' => "INNOWEEK tizimida ro'yxatdan o'tish uchun maxsus kod: " . $verify_code,
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
                session([
                    'verifyCode' => $verify_code,
                ]);
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
}
