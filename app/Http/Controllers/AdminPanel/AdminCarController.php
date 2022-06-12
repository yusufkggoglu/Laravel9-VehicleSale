<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminCarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Car::all();
        $brand = Brand::all();
        $user = User::all();
        return view('admin.car.index', [
            'data' => $data,
            'brand' => $brand,
            'user' => $user,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Category::all();
        $brand = Brand::all();
        return view('admin.car.create', [
            'data' => $data,
            'brand' => $brand,
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
        $data->user_id =$request->user_id;
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
        return redirect('admin/car');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Car $Car
     * @return \Illuminate\Http\Response
     */
    public function show(Car $Car, $id)
    {
        $data = Car::find($id);
        $brand = Brand::all();
        return view('admin.car.show', [
            'data' => $data,
            'brand' => $brand,
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
        $data = Car::find($id);
        $datalist = Category::all();
        $brand = Brand::all();
        return view('admin.car.edit', [
            'data' => $data,
            'datalist' => $datalist,
            'brand' => $brand,
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
        $data->user_id =$request->user_id;
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
        return redirect('admin/car');
    }

    public function updatestatus(Request $request, Car $Car, $id)
    {
        $data = Car::find($id);
        $data->status = $request->status;
        $data->save();
        return redirect('admin/car');
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
        return redirect('admin/car');
    }
}
