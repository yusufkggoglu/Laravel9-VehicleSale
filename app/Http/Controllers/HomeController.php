<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Category;
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
        $sliderdata = Car::limit(4)->get();
        $carlist1 = Car::limit(6)->get();
        $setting = Settings::first();
        return view('home.index', [
            'setting' => $setting,
            'sliderdata' => $sliderdata,
            'carlist1' => $carlist1
        ]);
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

    public function categorycars($slug)
    {
        echo "category";
        exit();
        $data = Car::find($id);
        $images = DB::table('images')->where('car_id', $id)->get();
        $carlist2 = Car::limit(6)->get();
        return view('home.car', [
            'data' => $data,
            'images' => $images,
            'carlist2' => $carlist2
        ]);
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
