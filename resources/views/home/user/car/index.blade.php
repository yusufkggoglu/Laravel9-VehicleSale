@extends('layouts.home')

@section('title','User Posting')
@section('icon',Storage::url($setting->icon))

@section('content')
    <div class="container" style="">
        <center>
            <h4><a href="{{route('index')}}">Home</a>/<a href="{{{route('user_car_posting')}}}">My Posting</a></h4>
        </center>
    </div>
    <div class="container">
        <div class="row">
            <h1>My Posting</h1>
            <div class="col-sm-push-6">
                <a href="/user/car/create" class="btn btn-primary btn-rounded btn-fw">Add
                    Car</a>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th style="font-size: x-large">Category</th>
                    <th style="font-size: x-large">Title</th>
                    <th style="font-size: x-large">Price</th>
                    <th style="font-size: x-large">Brand</th>
                    <th style="font-size: x-large">Image</th>
                    <th style="font-size: x-large">Image Gallery</th>
                    <th style="font-size: x-large">Status</th>
                    <th style="font-size: x-large">Edit</th>
                    <th style="font-size: x-large">Delete</th>
                    <th style="font-size: x-large">Show</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $rs)

                    <tr>
                        <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category,$rs->category->title)}}</td>
                        <td>{{$rs->title}}</td>
                        <td>{{$rs->price}}₺</td>
                        @foreach($brand as $temp)
                            @if($rs->brand_id==$temp->id)
                                <td>{{$temp->title}}</td>
                            @endif
                        @endforeach
                        @if($rs->brand_id==null)
                            <td></td>@endif
                        <td>
                            @if($rs->image)
                                <img src="{{Storage::url($rs->image)}}"
                                     style="border-radius:2px;width:80%;height:80%">
                            @endif
                        </td>
                        <td><a href="{{route('userpanel_image_index',['pid'=>$rs->id])}}"
                               onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                <img src="{{asset('assets')}}/admin/images/indir.png"
                                     style=" border-radius:2px ; height:40px ;width: 50px">
                            </a>
                        </td>

                        <td>{{$rs->status}}</td>
                        <td><a href="{{route('user_car_edit',['id'=>$rs->id])}}"
                               class="btn btn-primary btn-rounded btn-fw">Edit</a></td>
                        <td style="text-align: center">
                            <a class="btn btn-danger btn-rounded btn-fw"
                               style="color: white;"
                               href="{{route('user_car_delete',['id'=>$rs->id])}}"
                               ,
                               onclick="return confirm('Delete Are You Sure ?')">Delete</a>
                        </td>
                        <td><a href="/user/car/show/{{$rs->id}}"
                               class="btn btn-success btn-rounded btn-fw">Show</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
