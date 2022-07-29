<?php

namespace App\Http\Controllers;

use App\Models\About_bolim_en;
use Illuminate\Http\Request;
use App\Models\Eduhub;
use App\Models\Category_en;
use App\Models\Category_ru;
use App\Models\Category_uz;
use App\Models\Eduhub_nega_en;
use App\Models\Eduhub_nega_uz;
use App\Models\Eduhub_nega_ru;
use App\Models\Eduhub_steps_en;
use App\Models\Eduhub_steps_ru;
use App\Models\Eduhub_steps_uz;
use App\Models\Policy_en;
use App\Models\Policy_ru;
use App\Models\Policy_uz;
use App\Models\Servise_en;
use App\Models\Servise_uz;
use App\Models\Servise_ru;
use App\Models\About_en;
use App\Models\About_ru;
use Illuminate\Support\Facades\Hash;
use App\Models\About_uz;
use App\Models\About_bolim_ru;
use App\Models\About_bolim_uz;
use Illuminate\Support\Facades\DB;
use App\Models\Eduhub_jamoasi;
use App\Models\User;
use App\Models\Eduhub_header_uz;
use App\Models\Eduhub_header_en;
use App\Models\Eduhub_header_ru;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('isAdmin');
    }
/*
umumiy student va teacher   profil.
*/



    /*
    Header
    */


    public function header()
    {
        $t = app()->getLocale('lang');
        $header = DB::select('select * from eduhub_header_' . $t . 's ');
        return view('adminpanel/header/index', ['nega' => $header]);
    }
    public function header_add()
    {
        return view('adminpanel/header/add');
    }

    public function header_save(Request $req)
    {
        $data = $req->validate([
            'title_uz' => 'required',
            'title2_uz' => 'required',
            'text_uz' => 'required',
            'title_ru' => 'required',
            'title2_ru' => 'required',
            'text_ru' => 'required',
            'title_en' => 'required',
            'title2_en' => 'required',
            'text_en' => 'required',

            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);
        if ($req->hasFile('img')) {
            $filemodel = $req->file('img');
            $fileNameWithExt = $filemodel->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $ext = $filemodel->getClientOriginalExtension();
            $fileNameToStory = $filename . '_' . time() . "." . $ext;
            $path = $filemodel->storeAs('public/header/', $fileNameToStory);
        }
        $n = new Eduhub_header_uz();
        $e = new Eduhub_header_en();
        $r = new Eduhub_header_ru();
        $n->img = $fileNameToStory;
        $n->title = $data['title_uz'];
        $n->title2 = $data['title2_uz'];
        $n->text = $data['text_uz'];
        $e->img = $fileNameToStory;
        $e->title = $data['title_en'];
        $e->title2 = $data['title2_en'];
        $e->text = $data['text_en'];
        $r->img = $fileNameToStory;
        $r->title = $data['title_ru'];
        $r->title2 = $data['title2_ru'];
        $r->text = $data['text_ru'];
        $n->save();
        $e->save();
        $r->save();
        return redirect('/admin/header');
    }

    public function header_update(Request $req, $id)
    {
        $n = Eduhub_header_uz::find($id);
        $e = Eduhub_header_en::find($id);
        $r = Eduhub_header_ru::find($id);
        $data = $req->validate([
            'title_uz' => 'required|max:255',
            'title2_uz' => 'required|max:255',
            'text_uz' => 'required',
            'title_ru' => 'required',
            'title2_ru' => 'required',
            'text_ru' => 'required',
            'title_en' => 'required',
            'title2_en' => 'required',
            'text_en' => 'required',
        ]);
        if ($req->hasFile('img')) {
        $data = $req->validate([
            'title_uz' => 'required',
            'title2_uz' => 'required',
            'text_uz' => 'required',
            'title_ru' => 'required',
            'title2_ru' => 'required',
            'text_ru' => 'required',
            'title_en' => 'required',
            'title2_en' => 'required',
            'text_en' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',

        ]);
            $filemodel = $req->file('img');
            $fileNameWithExt = $filemodel->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $ext = $filemodel->getClientOriginalExtension();
            $fileNameToStory = $filename . '_' . time() . "." . $ext;
            $path = $filemodel->storeAs('public/header/', $fileNameToStory);
            $n->img = $fileNameToStory;
            $e->img = $fileNameToStory;
            $r->img = $fileNameToStory;
        }


        $n->title = $data['title_uz'];
        $n->title2 = $data['title2_uz'];
        $n->text = $data['text_uz'];

        $e->title = $data['title_en'];
        $e->title2 = $data['title2_en'];
        $e->text = $data['text_en'];

        $r->title = $data['title_ru'];
        $r->title2 = $data['title2_ru'];
        $r->text = $data['text_ru'];
        $n->save();
        $e->save();
        $r->save();
        return redirect('/admin/header');
    }
    public function header_edit($id)
    {
        $n = Eduhub_header_uz::find($id);
        $e = Eduhub_header_en::find($id);
        $r = Eduhub_header_ru::find($id);

        return view('adminpanel/header/edit', ['u' => $n,'e'=>$e, 'r'=>$r]);
    }
    public function header_dell($id)
    {
        $n = Eduhub_header_uz::find($id);
        $e = Eduhub_header_en::find($id);
        $r = Eduhub_header_ru::find($id);
        $n->delete();
        $e->delete();
        $r->delete();
        return redirect('/admin/header');
    }




    /*
profil settings

*/
    public function admin($id)
    {
        $user = User::find($id);
        return view('adminpanel/admin/index', ['nu' => $user]);
    }
    public function admin_update(Request $req, $id)
    {
        $n = User::find($id);
        $user = User::find($id);
        $data = $req->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);


        if ($user->email === $req->email) {
            $data = $req->validate([
                'email' => ['required', 'string', 'email', 'max:255'],
            ]);
            $n->email=$req->email;


        } else {
            $data = $req->validate([
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            ]);
            $n->email=$req->email;
        }

        if (strlen($req->sname) >= 1) {
            $data = $req->validate([
                'sname' => ['required', 'string', 'max:255'],
            ]);
            $n->sname=$req->sname;

        }
        if (strlen($req->tell) >= 1) {
            $data = $req->validate([
                'tell' => 'required|min:9|numeric'
            ]);
            $n->tell=$req->tell;

        }
        if ($req->has("img")) {
            $data = $req->validate([
                'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            ]);
            $filemodel = $req->file('img');
            $fileNameWithExt = $filemodel->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $ext = $filemodel->getClientOriginalExtension();
            $fileNameToStory = $filename . '_' . time() . "." . $ext;
            $path = $filemodel->storeAs('public/user/', $fileNameToStory);
            $n->img = $fileNameToStory;
        } else {
            $fileNameToStory = "user.png";
            $n->img = $fileNameToStory;
        }



        if (strlen($req->oldpassword) >= 1  and (!Hash::check($req->oldpassword, $user->password))) {

            $data = $req->validate([
                'oldpassword' => ['required', 'string', 'min:8'],
            ]);
            $pass = "Eski parolni hato kiritdingiz";
            return redirect()->back()->withErrors($pass)->withInput();
        } else {
            if (strlen($req->newpassword) >= 1 and (!strlen($req->resetpassword) >= 1)) {
                $pass = "Reset Password bo'limini toldiring";
                $data = $req->validate([
                    'oldpassword' => ['required', 'string', 'min:8',],
                    'newpassword' => ['required', 'string', 'min:8',],
                    'resetpassword' => ['required', 'string', 'min:8',],
                ]);
                return redirect()->back()->withErrors($pass)->withInput();
            }
            if (strlen($req->resetpassword) >= 1 and (!strlen($req->newpassword) >= 1)) {
                $pass = "New Password bo'limini toldiring";
                $data = $req->validate([
                    'resetpassword' => ['required', 'string', 'min:8'],
                ]);
                return redirect()->back()->withErrors($pass)->withInput();
            }
            if ($req->newpassword === $req->oldpassword and strlen($req->newpassword) >= 1) {
                $pass = "Yangi parolni qayta kiriting. Eski parolingizni takrorladingiz.";
                return redirect()->back()->withErrors($pass)->withInput();
            }
            if ((strlen($req->resetpassword) >= 1  and strlen($req->newpassword) >= 1) and (!$req->newpassword === $req->resetpassword)) {
                $pass = "Yangi parollar bir xil emas";
                $data = $req->validate([
                    'resetpassword' => ['required', 'string', 'min:8', 'confirmed'],
                    'newpassword' => ['required', 'string', 'min:8', 'confirmed'],
                ]);
                return redirect()->back()->withErrors($pass)->withInput();
            }
            if ((strlen($req->newpassword) >= 1  and strlen($req->resetpassword) >= 1) and $req->newpassword === $req->resetpassword) {
                $data = $req->validate([
                    'resetpassword' => ['required', 'string', 'min:8',],
                    'newpassword' => ['required', 'string', 'min:8'],
                ]);
                $password = Hash::make($data['newpassword']);
                $n->password = $password;
            }
        }
        $n->name=$req->name;


        $n->save();
        return redirect('adminpanel');
    }

    public function admin_add()
    {
        return view("adminpanel.admin.add");

    }

    public function admin_save(Request $req)
    {

        $n = new User();

        $data = $req->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'resetpassword' => ['required', 'string', 'min:8',],
            'newpassword' => ['required', 'string', 'min:8',],
        ]);

        if (strlen($req->sname) >= 1) {
            $data = $req->validate([
                'sname' => ['required', 'string', 'max:255'],
            ]);
            $n->sname = $data['sname'];
        }
        if (strlen($req->tell) >= 1) {
            $data = $req->validate([
                'tell' => 'required|min:9|numeric'
            ]);
            $n->tell = $data['tell'];
        }
        if ($req->has("img")) {
            $data = $req->validate([
                'img' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            ]);
            $filemodel = $req->file('img');
            $fileNameWithExt = $filemodel->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $ext = $filemodel->getClientOriginalExtension();
            $fileNameToStory = $filename . '_' . time() . "." . $ext;
            $path = $filemodel->storeAs('public/user/', $fileNameToStory);
            $n->img = $fileNameToStory;
        } else {
            $fileNameToStory = "user.png";
            $n->img = $fileNameToStory;
        }

        if ( $req->newpassword === $req->resetpassword) {
            $password = Hash::make($data['newpassword']);
            $n->password = $password;
        }else{
            $pass = "Yangi parollar bir xil emas";
            return redirect()->back()->withErrors($pass)->withInput();

        }

        $n->name = $data['name'];
        $n->email = $data['email'];
        $n->uroven ="admin";
        $n->level = 'oddiy';
        $n->save();
        return redirect('adminpanel');
    }






    /*
    EduHub Jamoasi
    */


    public function jamoa()
    {
        $jamoa = Eduhub_jamoasi::all();
        return view('adminpanel/jamoa/index', ['nega' => $jamoa]);
    }
    public function jamoa_add()
    {
        return view('adminpanel/jamoa/add');
    }

    public function jamoa_save(Request $req)
    {
        $data = $req->validate([
            'unvon' => 'required',
            'name' => 'required',
            'instagram' => 'required',
            'telegram' => 'required',
            'facebook' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);
        if ($req->hasFile('img')) {
            $filemodel = $req->file('img');
            $fileNameWithExt = $filemodel->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $ext = $filemodel->getClientOriginalExtension();
            $fileNameToStory = $filename . '_' . time() . "." . $ext;
            $path = $filemodel->storeAs('public/jamoa/', $fileNameToStory);
        } else {
            $fileNameToStory = "No_image.jpg";
        };
        $n = new Eduhub_jamoasi();
        $n->img = $fileNameToStory;
        $n->name = $data['name'];
        $n->uroven = $data['unvon'];
        $n->instagram = $data['instagram'];
        $n->telegram = $data['telegram'];
        $n->facebook = $data['facebook'];
        $n->save();
        return redirect('/admin/jamoa');
    }

    public function jamoa_update(Request $req, $id)
    {
        $data = $req->validate([
            'unvon' => 'required',
            'name' => 'required',
            'instagram' => 'required',
            'telegram' => 'required',
            'facebook' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',

        ]);
        if ($req->hasFile('img')) {
            $filemodel = $req->file('img');
            $fileNameWithExt = $filemodel->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $ext = $filemodel->getClientOriginalExtension();
            $fileNameToStory = $filename . '_' . time() . "." . $ext;
            $path = $filemodel->storeAs('public/jamoa/', $fileNameToStory);
        } else {
            $fileNameToStory = "No_image.jpg";
        };
        $n = Eduhub_jamoasi::find($id);
        $n->img = $fileNameToStory;
        $n->name = $data['name'];
        $n->uroven = $data['unvon'];
        $n->instagram = $data['instagram'];
        $n->telegram = $data['telegram'];
        $n->facebook = $data['facebook'];

        $n->save();
        return redirect('/admin/jamoa');
    }
    public function jamoa_edit($id)
    {
        $n = Eduhub_jamoasi::find($id);

        return view('adminpanel/jamoa/edit', ['nu' => $n,]);
    }
    public function jamoa_dell($id)
    {
        $cu = Eduhub_jamoasi::findOrFail($id);
        $cu->delete();
        return redirect('/admin/jamoa');
    }


    /*
    About bo'lim
    */


    public function about_b_add()
    {
        return view('adminpanel/about/add_b');
    }

    public function about_b_save(Request $req)
    {
        $data = $req->validate([
            'icon' => 'required',
            'title_uz' => 'required',
            'text_uz' => 'required',
            'title_ru' => 'required',
            'text_ru' => 'required',
            'title_en' => 'required',
            'text_en' => 'required',
        ]);
        $ne = new About_bolim_en();
        $nr = new About_bolim_ru();
        $nu = new About_bolim_uz();

        $nu->icon = $data['icon'];
        $nr->icon = $data['icon'];
        $ne->icon = $data['icon'];

        $nu->title = $data['title_uz'];
        $nr->title = $data['title_ru'];
        $ne->title = $data['title_en'];

        $nu->text = $data['title_uz'];
        $nr->text = $data['title_ru'];
        $ne->text = $data['title_en'];

        $nu->save();
        $nr->save();
        $ne->save();
        return redirect('/admin/about');
    }
    public function about_b_edit($id)
    {
        $ne = About_bolim_en::find($id);
        $nu = About_bolim_uz::find($id);
        $nr = About_bolim_ru::find($id);
        return view('adminpanel/about/edit_b', ['ne' => $ne, 'nu' => $nu, 'nr' => $nr]);
    }
    public function about_b_update(Request $req, $id)
    {
        $data = $req->validate([
            'icon' => 'required',
            'title_uz' => 'required',
            'text_uz' => 'required',
            'title_ru' => 'required',
            'text_ru' => 'required',
            'title_en' => 'required',
            'text_en' => 'required',
        ]);

        $ne = About_bolim_en::find($id);
        $nr = About_bolim_ru::find($id);
        $nu = About_bolim_uz::find($id);

        $nu->icon = $data['icon'];
        $nr->icon = $data['icon'];
        $ne->title = $data['icon'];


        $nu->title = $data['title_uz'];
        $nr->title = $data['title_ru'];
        $ne->title = $data['title_en'];

        $nu->text = $data['text_uz'];
        $nr->text = $data['text_ru'];
        $ne->text = $data['text_en'];

        $nu->save();
        $nr->save();
        $ne->save();
        return redirect('/admin/about');
    }
    public function about_b_dell($id)
    {
        $ce = About_bolim_en::find($id);
        $cr = About_bolim_ru::find($id);
        $cu = About_bolim_uz::find($id);
        $ce->delete();
        $cu->delete();
        $cr->delete();
        return redirect('/admin/about');
    }



    /*
        About
    */
    public function about()
    {
        $t = app()->getLocale('lang');
        $about = DB::select('select * from about_' . $t . 's ');
        $about_b = DB::select('select * from about_bolim_' . $t . 's ');
        return view('adminpanel/about/index', ['nega' => $about, 'cat' => $about_b]);
    }
    public function about_add()
    {
        return view('adminpanel/about/add');
    }

    public function about_save(Request $req)
    {
        $data = $req->validate([
            'title_uz' => 'required',
            'text_uz' => 'required',
            'title_ru' => 'required',
            'text_ru' => 'required',
            'title_en' => 'required',
            'text_en' => 'required',
        ]);
        $ne = new About_en();
        $nr = new About_ru();
        $nu = new About_uz();

        $nu->title = $data['title_uz'];
        $nr->title = $data['title_ru'];
        $ne->title = $data['title_en'];

        $nu->text = $data['title_uz'];
        $nr->text = $data['title_ru'];
        $ne->text = $data['title_en'];

        $nu->save();
        $nr->save();
        $ne->save();
        return redirect('/admin/about');
    }
    public function about_edit($id)
    {
        $ne = About_en::find($id);
        $nu = About_uz::find($id);
        $nr = About_ru::find($id);
        return view('adminpanel/about/edit', ['ne' => $ne, 'nu' => $nu, 'nr' => $nr]);
    }
    public function about_update(Request $req, $id)
    {
        $data = $req->validate([
            'title_uz' => 'required',
            'text_uz' => 'required',
            'title_ru' => 'required',
            'text_ru' => 'required',
            'title_en' => 'required',
            'text_en' => 'required',
        ]);

        $ne = About_en::find($id);
        $nr = About_ru::find($id);
        $nu = About_uz::find($id);


        $nu->title = $data['title_uz'];
        $nr->title = $data['title_ru'];
        $ne->title = $data['title_en'];

        $nu->text = $data['text_uz'];
        $nr->text = $data['text_ru'];
        $ne->text = $data['text_en'];

        $nu->save();
        $nr->save();
        $ne->save();
        return redirect('/admin/about');
    }
    public function about_dell($id)
    {
        $ce = About_en::find($id);
        $cr = About_ru::find($id);
        $cu = About_uz::find($id);
        $ce->delete();
        $cu->delete();
        $cr->delete();
        return redirect('/admin/about');
    }



    /*
Teams of Services
    */
    public function services()
    {
        $t = app()->getLocale('lang');
        $services = DB::select('select * from servise_' . $t . 's ');
        return view('adminpanel/services/index', ['nega' => $services]);
    }
    public function services_add()
    {
        return view('adminpanel/services/add');
    }
    public function services_save(Request $req)
    {
        $data = $req->validate([
            'title_uz' => 'required',
            'text_uz' => 'required',
            'title_ru' => 'required',
            'text_ru' => 'required',
            'title_en' => 'required',
            'text_en' => 'required',
        ]);
        $ne = new Servise_en();
        $nr = new Servise_ru();
        $nu = new Servise_uz();

        $nu->title = $data['title_uz'];
        $nr->title = $data['title_ru'];
        $ne->title = $data['title_en'];

        $nu->text = $data['title_uz'];
        $nr->text = $data['title_ru'];
        $ne->text = $data['title_en'];

        $nu->save();
        $nr->save();
        $ne->save();
        return redirect('/admin/services');
    }
    public function services_edit($id)
    {
        $ne = Servise_en::find($id);
        $nu = Servise_uz::find($id);
        $nr = Servise_ru::find($id);
        return view('adminpanel/services/edit', ['ne' => $ne, 'nu' => $nu, 'nr' => $nr]);
    }
    public function services_update(Request $req, $id)
    {
        $data = $req->validate([
            'title_uz' => 'required',
            'text_uz' => 'required',
            'title_ru' => 'required',
            'text_ru' => 'required',
            'title_en' => 'required',
            'text_en' => 'required',
        ]);

        $ne = Servise_en::find($id);
        $nr = Servise_ru::find($id);
        $nu = Servise_uz::find($id);


        $nu->title = $data['title_uz'];
        $nr->title = $data['title_ru'];
        $ne->title = $data['title_en'];

        $nu->text = $data['text_uz'];
        $nr->text = $data['text_ru'];
        $ne->text = $data['text_en'];

        $nu->save();
        $nr->save();
        $ne->save();
        return redirect('/admin/services');
    }
    public function services_dell($id)
    {
        $ce = Servise_en::find($id);
        $cr = Servise_ru::find($id);
        $cu = Servise_uz::find($id);
        $ce->delete();
        $cu->delete();
        $cr->delete();
        return redirect('/admin/services');
    }


    /*
    Privacy-police
    */
    public function policy()
    {
        $t = app()->getLocale('lang');
        $policy = DB::select('select * from policy_' . $t . 's ');
        return view('adminpanel/policy/index', ['nega' => $policy]);
    }
    public function policy_add()
    {
        return view('adminpanel/policy/add');
    }
    public function policy_save(Request $req)
    {
        $data = $req->validate([
            'title_uz' => 'required',
            'text_uz' => 'required',
            'title_ru' => 'required',
            'text_ru' => 'required',
            'title_en' => 'required',
            'text_en' => 'required',
        ]);
        $ne = new Policy_en();
        $nr = new Policy_ru();
        $nu = new Policy_uz();

        $nu->title = $data['title_uz'];
        $nr->title = $data['title_ru'];
        $ne->title = $data['title_en'];

        $nu->text = $data['title_uz'];
        $nr->text = $data['title_ru'];
        $ne->text = $data['title_en'];

        $nu->save();
        $nr->save();
        $ne->save();
        return redirect('/admin/policy');
    }
    public function policy_edit($id)
    {
        $ne = Policy_en::find($id);
        $nu = Policy_uz::find($id);
        $nr = Policy_ru::find($id);
        return view('adminpanel/policy/edit', ['ne' => $ne, 'nu' => $nu, 'nr' => $nr]);
    }
    public function policy_update(Request $req, $id)
    {
        $data = $req->validate([
            'title_uz' => 'required',
            'text_uz' => 'required',
            'title_ru' => 'required',
            'text_ru' => 'required',
            'title_en' => 'required',
            'text_en' => 'required',
        ]);

        $ne = Policy_en::find($id);
        $nr = Policy_ru::find($id);
        $nu = Policy_uz::find($id);


        $nu->title = $data['title_uz'];
        $nr->title = $data['title_ru'];
        $ne->title = $data['title_en'];

        $nu->text = $data['text_uz'];
        $nr->text = $data['text_ru'];
        $ne->text = $data['text_en'];

        $nu->save();
        $nr->save();
        $ne->save();
        return redirect('/admin/policy');
    }
    public function policy_dell($id)
    {
        $ce = Policy_en::find($id);
        $cr = Policy_ru::find($id);
        $cu = Policy_uz::find($id);
        $ce->delete();
        $cu->delete();
        $cr->delete();
        return redirect('/admin/policy');
    }


    /*EduHub_Qadamlar
*/
    public function steps()
    {
        $t = app()->getLocale('lang');
        $steps = DB::select('select * from eduhub_steps_' . $t . 's ');
        return view('adminpanel/Steps/index', ['nega' => $steps]);
    }
    public function steps_add()
    {
        return view('adminpanel/Steps/add');
    }

    public function steps_save(Request $req)
    {
        $data = $req->validate([
            'title_uz' => 'required',
            'title_en' => 'required',
            'title_ru' => 'required',
            'link_youtube' => 'required',

            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',

            'title1_uz' => 'required',
            'text1_uz' => 'required',
            'title1_en' => 'required',
            'text1_en' => 'required',
            'title1_ru' => 'required',
            'text1_ru' => 'required',

            'title2_uz' => 'required',
            'text2_uz' => 'required',
            'title2_en' => 'required',
            'text2_en' => 'required',
            'title2_ru' => 'required',
            'text2_ru' => 'required',

            'title3_uz' => 'required',
            'text3_uz' => 'required',
            'title3_en' => 'required',
            'text3_en' => 'required',
            'title3_ru' => 'required',
            'text3_ru' => 'required',

        ]);
        if ($req->hasFile('img')) {
            $filemodel = $req->file('img');
            $fileNameWithExt = $filemodel->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $ext = $filemodel->getClientOriginalExtension();
            $fileNameToStory = $filename . '_' . time() . "." . $ext;
            $path = $filemodel->storeAs('public/steps/', $fileNameToStory);
        } else {
            $fileNameToStory = "No_image.jpg";
        };
        $ne = new Eduhub_steps_en();
        $nr = new Eduhub_steps_ru();
        $nu = new Eduhub_steps_uz();

        $nu->link_youtube = $data['link_youtube'];
        $nr->link_youtube = $data['link_youtube'];
        $ne->link_youtube = $data['link_youtube'];

        $nu->img = $fileNameToStory;
        $nr->img = $fileNameToStory;
        $ne->img = $fileNameToStory;

        $nu->title = $data['title_uz'];
        $nr->title = $data['title_ru'];
        $ne->title = $data['title_en'];

        $nu->text1 = $data['text1_uz'];
        $nu->title1 = $data['title1_uz'];
        $nr->text1 = $data['text1_ru'];
        $nr->title1 = $data['title1_ru'];
        $ne->text1 = $data['text1_en'];
        $ne->title1 = $data['title1_en'];

        $nu->text2 = $data['text2_uz'];
        $nu->title2 = $data['title2_uz'];
        $nr->text2 = $data['text2_ru'];
        $nr->title2 = $data['title2_ru'];
        $ne->text2 = $data['text2_en'];
        $ne->title2 = $data['title2_en'];

        $nu->text3 = $data['text3_uz'];
        $nu->title3 = $data['title3_uz'];
        $nr->text3 = $data['text3_ru'];
        $nr->title3 = $data['title3_ru'];
        $ne->text3 = $data['text3_en'];
        $ne->title3 = $data['title3_en'];



        $nu->save();
        $nr->save();
        $ne->save();
        return redirect('/admin/negaEduHub');
    }

    public function qadam_update(Request $req, $id)
    {
        $data = $req->validate([
            'title_uz' => 'required',
            'title_en' => 'required',
            'title_ru' => 'required',
            'link_youtube' => 'required',

            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',

            'title1_uz' => 'required',
            'text1_uz' => 'required',
            'title1_en' => 'required',
            'text1_en' => 'required',
            'title1_ru' => 'required',
            'text1_ru' => 'required',

            'title2_uz' => 'required',
            'text2_uz' => 'required',
            'title2_en' => 'required',
            'text2_en' => 'required',
            'title2_ru' => 'required',
            'text2_ru' => 'required',

            'title3_uz' => 'required',
            'text3_uz' => 'required',
            'title3_en' => 'required',
            'text3_en' => 'required',
            'title3_ru' => 'required',
            'text3_ru' => 'required',

        ]);
        if ($req->hasFile('img')) {
            $filemodel = $req->file('img');
            $fileNameWithExt = $filemodel->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $ext = $filemodel->getClientOriginalExtension();
            $fileNameToStory = $filename . '_' . time() . "." . $ext;
            $path = $filemodel->storeAs('public/steps/', $fileNameToStory);
        } else {
            $fileNameToStory = "No_image.jpg";
        };
        $ne = Eduhub_steps_en::find($id);
        $nr = Eduhub_steps_ru::find($id);
        $nu = Eduhub_steps_uz::find($id);


        $nu->link_youtube = $data['link_youtube'];
        $nr->link_youtube = $data['link_youtube'];
        $ne->link_youtube = $data['link_youtube'];

        $nu->img = $fileNameToStory;
        $nr->img = $fileNameToStory;
        $ne->img = $fileNameToStory;

        $nu->title = $data['title_uz'];
        $nr->title = $data['title_ru'];
        $ne->title = $data['title_en'];

        $nu->text1 = $data['text1_uz'];
        $nu->title1 = $data['title1_uz'];
        $nr->text1 = $data['text1_ru'];
        $nr->title1 = $data['title1_ru'];
        $ne->text1 = $data['text1_en'];
        $ne->title1 = $data['title1_en'];

        $nu->text2 = $data['text2_uz'];
        $nu->title2 = $data['title2_uz'];
        $nr->text2 = $data['text2_ru'];
        $nr->title2 = $data['title2_ru'];
        $ne->text2 = $data['text2_en'];
        $ne->title2 = $data['title2_en'];

        $nu->text3 = $data['text3_uz'];
        $nu->title3 = $data['title3_uz'];
        $nr->text3 = $data['text3_ru'];
        $nr->title3 = $data['title3_ru'];
        $ne->text3 = $data['text3_en'];
        $ne->title3 = $data['title3_en'];


        $nu->save();
        $nr->save();
        $ne->save();
        return redirect('/admin/qadam');
    }
    public function steps_edit($id)
    {
        $ne = Eduhub_steps_en::find($id);
        $nu = Eduhub_steps_uz::find($id);
        $nr = Eduhub_steps_uz::find($id);
        return view('adminpanel/Steps/edit', ['ne' => $ne, 'nu' => $nu, 'nr' => $nr]);
    }
    public function qadam_dell($id)
    {
        $cu = Eduhub_steps_uz::findOrFail($id);
        $cr = Eduhub_steps_ru::findOrFail($id);
        $ce = Eduhub_steps_en::findOrFail($id);
        $ce->delete();
        $cu->delete();
        $cr->delete();
        return redirect('/admin/qadam');
    }





    /*EduHub_nega
*/
    public function nega()
    {
        $t = app()->getLocale('lang');
        $nega = DB::select('select * from eduhub_nega_' . $t . 's  ');
        return view('adminpanel/Nega_EduHub/index', ['nega' => $nega]);
    }
    public function nega_edit($id)
    {
        $ne = Eduhub_nega_en::find($id);
        $nr = Eduhub_nega_ru::find($id);
        $nu = Eduhub_nega_uz::find($id);
        return view('adminpanel/Nega_EduHub/edit', ['ne' => $ne, 'nu' => $nu, 'nr' => $nr]);
    }
    public function nega_add()
    {
        return view('adminpanel/Nega_EduHub/add');
    }
    public function nega_save(Request $req)
    {
        $data = $req->validate([
            'text_uz' => 'required',
            'title_uz' => 'required',
            'text_en' => 'required',
            'title_en' => 'required',
            'text_ru' => 'required',
            'title_ru' => 'required',
            'icon' => 'required',
        ]);
        $ne = new Eduhub_nega_en();
        $nr = new Eduhub_nega_ru();
        $nu = new Eduhub_nega_uz();

        $nu->text = $data['text_uz'];
        $nu->title = $data['title_uz'];
        $nu->icon = $data['icon'];
        $ne->text = $data['text_en'];
        $ne->title = $data['title_en'];
        $ne->icon = $data['icon'];
        $nr->text = $data['text_ru'];
        $nr->title = $data['title_ru'];
        $nr->icon = $data['icon'];
        $nu->save();
        $nr->save();
        $ne->save();
        return redirect('/admin/negaEduHub');
    }
    public function nega_dell($id)
    {
        $cu = Eduhub_nega_uz::findOrFail($id);
        $cr = Eduhub_nega_ru::findOrFail($id);
        $ce = Eduhub_nega_en::findOrFail($id);
        $ce->delete();
        $cu->delete();
        $cr->delete();
        return redirect('/admin/negaEduHub');
    }
    public function nega_updete(Request $req, $id)
    {
        $data = $req->validate([
            'text_uz' => 'required',
            'title_uz' => 'required',
            'text_en' => 'required',
            'title_en' => 'required',
            'text_ru' => 'required',
            'title_ru' => 'required',
            'icon' => 'required',
        ]);
        $ne = Eduhub_nega_en::find($id);
        $nr = Eduhub_nega_ru::find($id);
        $nu = Eduhub_nega_uz::find($id);

        $nu->text = $data['title_uz'];
        $nu->title = $data['title_uz'];
        $nu->icon = $data['icon'];
        $ne->text = $data['title_en'];
        $ne->title = $data['title_en'];
        $ne->icon = $data['icon'];
        $nr->text = $data['text_ru'];
        $nr->title = $data['title_ru'];
        $nr->icon = $data['icon'];
        $nu->save();
        $nr->save();
        $ne->save();
        return redirect('/admin/negaEduHub');
    }

    /*Category
*/
    public function category()
    {
        $t = app()->getLocale('lang');
        $cat = DB::select('select * from category_' . $t . 's ');
        return view('adminpanel/category/index', ['cat' => $cat]);
    }
    public function category_add()
    {
        $t = app()->getLocale('lang');
        $cat = DB::select('select * from category_' . $t . 's  limit 3');
        return view('adminpanel/category/add');
    }
    public function category_edit($id)
    {
        $cu = Category_uz::findOrFail($id);
        $cr = Category_ru::findOrFail($id);
        $ce = Category_en::findOrFail($id);
        return view('adminpanel.category.edit', ['cu' => $cu, 'cr' => $cr, 'ce' => $ce]);
    }
    public function category_dell($id)
    {
        $cu = Category_uz::findOrFail($id);
        $cr = Category_ru::findOrFail($id);
        $ce = Category_en::findOrFail($id);
        $ce->delete();
        $cu->delete();
        $cr->delete();
        return redirect('/admin/category');
    }
    public function category_update(Request $req, $id)
    {
        $data = $req->validate([
            'name_uz' => 'required',
            'name_en' => 'required',
            'name_ru' => 'required',
            'icon' => 'required',
            'color' => 'required',
        ]);
        $ce = Category_en::find($id);
        $cu = Category_uz::find($id);
        $cr = Category_ru::find($id);

        $cu->name = $data['name_uz'];
        $cu->icon = $data['icon'];
        $cu->color = $data['color'];

        $cr->name = $data['name_ru'];
        $cr->icon = $data['icon'];
        $cr->color = $data['color'];

        $ce->name = $data['name_en'];
        $ce->icon = $data['icon'];
        $ce->color = $data['color'];

        $cu->save();
        $cr->save();
        $ce->save();
        return redirect('/admin/category');
    }
    public function category_save(Request $req)
    {
        $data = $req->validate([
            'name_uz' => 'required',
            'name_en' => 'required',
            'name_ru' => 'required',
            'icon' => 'required',
            'color' => 'required',
        ]);
        $ce = new Category_en();
        $cu = new Category_uz();
        $cr = new Category_ru();

        $cu->name = $data['name_uz'];
        $cu->icon = $data['icon'];
        $cu->color = $data['color'];

        $cr->name = $data['name_ru'];
        $cr->icon = $data['icon'];
        $cr->color = $data['color'];

        $ce->name = $data['name_en'];
        $ce->icon = $data['icon'];
        $ce->color = $data['color'];

        $cu->save();
        $cr->save();
        $ce->save();
        return redirect('/admin/category');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eduhub = Eduhub::all();
        return view('adminpanel.EduHub.index', ['eduhub' => $eduhub]);
    }
    public function eduhub_add()
    {
        return view('adminpanel.EduHub.add');
    }
    public function eduhub_addsave(Request $request)
    {
        $data = $request->validate([
            'tell' => 'required',
            'email' => 'required', 'email',
            'telegram' => 'required',
            'facebook' => 'required',
            'you-tube' => 'required',
            'instagram' => 'required',
            'google_play' => 'required',
            'app_story' => 'required',
            'adress' => 'required',
            'office_open' => 'required',
            'office_close' => 'required',
            'awards_count' => 'required',
        ]);

        $Eduhub = new Eduhub;
        $Eduhub->tell = $data['tell'];
        $Eduhub->email = $data['email'];
        $Eduhub->adress = $data['adress'];
        $Eduhub->awards_count = $data['awards_count'];
        $Eduhub->office_open = $data['office_open'];
        $Eduhub->office_close = $data['office_close'];
        $Eduhub->facebook = $data['facebook'];
        $Eduhub->telegram = $data['telegram'];
        $Eduhub->instagram = $data['instagram'];
        $Eduhub->you_tube = $data['you-tube'];
        $Eduhub->app_story = $data['app_story'];
        $Eduhub->google_play = $data['google_play'];
        $Eduhub->save();
        return redirect('/adminpanel');
    }
    public function eduhub_edit($id)
    {
        $eduhub = Eduhub::findOrFail($id);
        return view('adminpanel.EduHub.edit', ['eduhub' => $eduhub]);
    }
    public function eduhub_update(Request $request, $id)
    {
        $data = $request->validate([
            'tell' => 'required',
            'email' => 'required', 'email',
            'telegram' => 'required',
            'facebook' => 'required',
            'you-tube' => 'required',
            'instagram' => 'required',
            'google_play' => 'required',
            'app_story' => 'required',
            'adress' => 'required',
            'office_open' => 'required',
            'office_close' => 'required',
            'awards_count' => 'required',
        ]);

        $Eduhub = Eduhub::findOrFail($id);
        $Eduhub->tell = $data['tell'];
        $Eduhub->email = $data['email'];
        $Eduhub->adress = $data['adress'];
        $Eduhub->awards_count = $data['awards_count'];
        $Eduhub->office_open = $data['office_open'];
        $Eduhub->office_close = $data['office_close'];
        $Eduhub->facebook = $data['facebook'];
        $Eduhub->telegram = $data['telegram'];
        $Eduhub->instagram = $data['instagram'];
        $Eduhub->you_tube = $data['you-tube'];
        $Eduhub->app_story = $data['app_story'];
        $Eduhub->google_play = $data['google_play'];
        $Eduhub->save();
        return redirect('/adminpanel');
    }
    public function eduhub_dell($id)
    {
        $eduhub = Eduhub::findOrFail($id);
        $eduhub->delete();
        return redirect('/adminpanel');
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
