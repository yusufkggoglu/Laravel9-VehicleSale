<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($pid)
    {
        $car=Car::find($pid);
        $images = DB::table('images')->where('car_id',$pid)->get();
        return view('admin.image.index', [
            'car' => $car,
            'images' => $images
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($pid)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$pid)
    {
        $data = new Image();
        $data->car_id =$pid;
        $data->title = $request->title;
        $data->image = $request->image;
        if ($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }
        $data->save();
        return redirect()->route('admin_image_index',['pid'=>$pid]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$pid,$id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($pid,$id)
    {
        $data=Image::find($id);
        if($data->image && Storage::disk('public')->exists($data->image)){
            Storage::delete("$data->image");
        }
        $data->delete();
        return redirect()->route('admin_image_index',['pid'=>$pid]);
    }
}
