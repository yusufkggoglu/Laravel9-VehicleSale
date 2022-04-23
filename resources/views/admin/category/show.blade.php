@extends('layouts.admin')

@section('title', 'Show Category : '.$data->title)

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 style="font-size: large" class="card-title">{{$data->title}} Details</h4>
                            <div>
                                <td><a href="/admin/category/edit/{{$data->id}}"
                                       class="btn btn-primary btn-rounded btn-fw">Edit</a></td>
                                <td><a href="/admin/category/delete/{{$data->id}}"
                                       class="btn btn-danger btn-rounded btn-fw">Delete</a></td>
                            </div>
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                    <tr>
                                        <th style="width: 30px">ID</th>
                                        <td>{{$data->id}}</td>
                                    </tr>
                                    <tr>
                                        <th style="width:30px">Title</th>
                                        <td>{{$data->title}}</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 30px">Keywords</th>
                                        <td>{{$data->keywords}}</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 30px">Image</th>
                                        <td>@if($data->image)
                                                <img src="{{Storage::url($data->image)}}"
                                                     style=" border-radius:2px ; height:100px ;width: 150px">
                                            @endif</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 30px">Status</th>
                                        <td>{{$data->status}}</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 30px">Created Date</th>
                                        <td>{{$data->created_at}}</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 30px">Updated Date</th>
                                        <td>{{$data->updated_at}}</td>
                                    </tr>


                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
