@extends('layouts.admin')

@section('title', 'Cars ')

@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="template-demo">
                                <div class="card-body">
                                    <h4 style="font-size: large" class="card-title">Car List</h4>
                                    <div class="col-sm-push-6">
                                        <a href="/admin/car/create" class="btn btn-md btn-inverse-primary btn-fw">Add
                                            Car</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Category</th>
                                                <th>Title</th>
                                                <th>Price</th>
                                                <th>Brand</th>
                                                <th>Image</th>
                                                <th>Image Gallery</th>
                                                <th>Status</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                                <th>Show</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($data as $rs)

                                                <tr>
                                                    <td>{{$rs->id}}</td>
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
                                                                 style="border-radius:2px;width:100%;height:100%">
                                                        @endif
                                                    </td>
                                                    <td><a href="{{route('admin_image_index',['pid'=>$rs->id])}}"
                                                           onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                                            <img src="{{asset('assets')}}/admin/images/indir.png"
                                                                 style=" border-radius:2px ; height:40px ;width: 50px">
                                                        </a>
                                                    </td>

                                                    <td>{{$rs->status}}</td>
                                                    <td><a href="/admin/car/edit/{{$rs->id}}"
                                                           class="btn btn-primary btn-rounded btn-fw">Edit</a></td>
                                                    <td style="text-align: center">
                                                        <a class="btn btn-danger btn-rounded btn-fw"
                                                           style="color: white;"
                                                           href="{{route('admin_car_delete',['id'=>$rs->id])}}"
                                                           ,
                                                           onclick="return confirm('Delete Are You Sure ?')">Delete</a>
                                                    </td>
                                                    <td><a href="/admin/car/show/{{$rs->id}}"
                                                           class="btn btn-success btn-rounded btn-fw">Show</a></td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 grid-margin astretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Footer</h4>

                            <div class="template-demo">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('footer')

@endsection
