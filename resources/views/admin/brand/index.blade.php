@extends('layouts.admin')

@section('title', 'Brands ')

@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="template-demo">
                                <div class="card-body">
                                    <h4 style="font-size: large" class="card-title">Brand List</h4>
                                    <div class="col-sm-push-6">
                                        <a href="/admin/brand/create" class="btn btn-md btn-inverse-primary btn-fw">Add
                                            Brand</a>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Title</th>
                                                <th>Keywords</th>
                                                <th>Description</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <th>Delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($data as $rs)
                                                <tr>
                                                    <td>{{$rs->id}}</td>
                                                    <td>{{$rs->title}}</td>
                                                    <td>{{$rs->keywords}}</td>
                                                    <td>{{$rs->description}}</td>
                                                    <td>
                                                        @if($rs->image)
                                                            <img src="{{Storage::url($rs->image)}}"
                                                                 style=" height:100px ;width: 150px">
                                                        @endif
                                                    </td>
                                                    <td>{{$rs->status}}</td>
                                                    <td style="text-align: center">
                                                        <a class="btn btn-danger btn-rounded btn-fw"
                                                           style="color: white;"
                                                           href="{{route('admin_brand_delete',['id'=>$rs->id])}}"
                                                           ,
                                                           onclick="return confirm('Delete Are You Sure ?')">Delete</a>
                                                    </td>
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
