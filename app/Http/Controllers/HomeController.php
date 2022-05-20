<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Settings;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public static function maincategorylist()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    public function index()
    {
        $page = 'home';
        $sliderdata = Car::limit(4)->get();
        $carlist1 = Car::limit(6)->get();
        $setting = Settings::first();
        return view('home.index', [
            'page' => $page,
            'setting' => $setting,
            'sliderdata' => $sliderdata,
            'carlist1' => $carlist1
        ]);
    }

    public function about()
    {
        $setting = Settings::first();
        return view('home.about', [
            'setting' => $setting,
        ]);
    }

    public function references()
    {
        $setting = Settings::first();
        return view('home.references', [
            'setting' => $setting,
        ]);
    }

    public function contact()
    {
        $setting = Settings::first();
        return view('home.contact', [
            'setting' => $setting,
        ]);
    }

    public function faq()
    {
        $setting = Settings::first();
        $datalist = Faq::all();

        return view('home.faq', [
            'setting' => $setting,
            'datalist' =>$datalist

        ]);
    }

    public function storemessage(Request $request)
    {
        //dd($request);
        $data = new Message();
        $data->name = $request->input('name');
        $data->lastname = $request->input('lastname');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip = $request->ip();
        $data->save();

        return redirect()->route('contact')->with('info', 'Your Message has been sent , Thank You.');

    }


    public function car($id)
    {
        $data = Car::find($id);
        $images = DB::table('images')->where('car_id', $id)->get();
        $carlist2 = Car::limit(6)->get();
        return view('home.car', [
            'data' => $data,
            'images' => $images,
            'carlist2' => $carlist2
        ]);
    }

    public function categorycars($id)
    {
        $category = Category::find($id);
        $cars = DB::table('cars')->where('category_id', $id)->get();
        return view('home.categorycars', [
            'category' => $category,
            'cars' => $cars,
        ]);
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
