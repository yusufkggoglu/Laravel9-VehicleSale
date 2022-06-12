<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Car;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserCarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Settings::first();
        $data = Car::where('user_id', '=', Auth::id())->get();
        $brand = Brand::all();
        return view('home.user.car.index', [
            'data' => $data,
            'brand' => $brand,
            'setting' => $setting,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $setting = Settings::first();
        $data = Category::all();
        $brand = Brand::all();
        return view('home.user.car.create', [
            'data' => $data,
            'brand' => $brand,
            'setting' => $setting,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Car();
        $data->category_id = $request->category_id;
        $data->user_id = $request->user_id;
        $data->brand_id = $request->brand_id;
        $data->brand = $request->brand;
        $data->model = $request->model;
        $data->seri = $request->seri;
        $data->yakit_turu = $request->yakit_turu;
        $data->vites = $request->vites;
        $data->km = $request->km;
        $data->kapi = $request->kapi;
        $data->renk = $request->renk;
        $data->price = $request->price;
        $data->yil = $request->yil;
        $data->detail = $request->detail;
        $data->durum = $request->durum;
        $data->telno = $request->telno;


        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->image = $request->image;
        $data->status = $request->status;
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('images');
        }
        $data->save();
        return redirect('user/posting');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Car $Car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $Car, $id)
    {
        $setting = Settings::first();
        $data = Car::find($id);
        $brand = Brand::all();
        return view('home.user.car.show', [
            'data' => $data,
            'brand' => $brand,
            'setting' => $setting,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Car $Car
     * @return \Illuminate\Http\Response
     */
    public function edit(Car $Car, $id)
    {
        $setting = Settings::first();
        $data = Car::find($id);
        $datalist = Category::all();
        $brand = Brand::all();
        return view('home.user.car.edit', [
            'data' => $data,
            'datalist' => $datalist,
            'brand' => $brand,
            'setting' => $setting,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Car $Car
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car $Car, $id)
    {
        $data = Car::find($id);
        $data->category_id = $request->category_id;
        $data->user_id = $request->user_id;
        $data->brand_id = $request->brand_id;
        $data->brand = $request->brand;
        $data->model = $request->model;
        $data->seri = $request->seri;
        $data->yakit_turu = $request->yakit_turu;
        $data->vites = $request->vites;
        $data->km = $request->km;
        $data->kapi = $request->kapi;
        $data->renk = $request->renk;
        $data->price = $request->price;
        $data->yil = $request->yil;
        $data->detail = $request->detail;
        $data->durum = $request->durum;


        $data->title = $request->title;
        $data->keywords = $request->keywords;
        $data->description = $request->description;
        $data->image = $request->image;
        $data->status = $request->status;
        if ($request->file('image')) {
            $data->image = $request->file('image')->store('images');
        }
        $data->save();
        return redirect('user/posting');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Car $Car
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car $Car, $id)
    {
        $data = Car::find($id);
        if ($data->image && Storage::disk('public')->exists($data->image)) {
            Storage::delete("$data->image");
        }
        $data->delete();
        return redirect('user/posting');
    }
}
