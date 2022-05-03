<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Monolog\Handler\ZendMonitorHandler;

class AdminHomeController extends Controller
{
    //
    public function index()
    {
        return view('admin.index');
    }

    public function setting()
    {
        $data = Settings::first();
        if ($data == null) //if setting table is empty add one record
        {
            $data = new Settings();
            $data->title = 'Project Title';
            $data->save();
            $data = Settings::first();
        }
        return view('admin.setting', [
            'data' => $data
        ]);
    }

    public function settingsUpdate(Request $request)
    {
        $id = $request->input('id');

        $data = Settings::find($id);
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->company = $request->input('company');
        $data->address = $request->input('address');
        $data->phone = $request->input('phone');
        $data->fax = $request->input('fax');
        $data->email = $request->input('email');
        $data->smtpserver = $request->input('smtpserver');
        $data->smtpemail = $request->input('smtpemail   ');
        $data->smtppassword = $request->input('smtppassword');
        $data->smtpport = $request->input('smtpport');
        $data->facebook = $request->input('facebook');
        $data->instagram = $request->input('instagram');
        $data->twitter = $request->input('twitter');
        $data->youtube = $request->input('youtube');
        $data->aboutus = $request->input('aboutus');
        $data->contact = $request->input('contact');
        $data->references = $request->input('references');
        if ($request->file('icon')){
            $data->icon=$request->file('icon')->store('icon');
        }
        $data->status = $request->input('status');
        $data->save();
        return redirect()->route('admin_setting');

    }


    public function aboutus()
    {
        return view('home.about');
    }

    public function login()
    {

        return view('admin.login');
    }

    public function logincheck(Request $request)
    {
        if ($request->isMethod('post')) {
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email' => 'The provided credentials do not  match  our records.',
            ]);

        } else {
            return view('admin.login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
}
