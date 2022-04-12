@extends('layouts.admin')

@section('title', 'Categories ')

@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="template-demo">
                                <div class="card-body">
                                    <h4 style="font-size: large" class="card-title">Category List</h4>
                                    <div class="col-sm-push-6">
                                        <a href="/admin/category/create" class="btn btn-md btn-inverse-primary btn-fw">Add
                                            Category</a>
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
                                                <th>Edit</th>
                                                <th>Delete</th>
                                                <th>Show</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($data as $rs)

                                                <tr>
                                                    <td>{{$rs->id}}</td>
                                                    <td>{{$rs->title}}</td>
                                                    <td>{{$rs->keywords}}</td>
                                                    <td>{{$rs->description}}</td>
                                                    <td>{{$rs->image}}</td>
                                                    <td>{{$rs->status}}</td>
                                                    <td><a href="/admin/category/edit/{{$rs->id}}"
                                                           class="btn btn-primary btn-rounded btn-fw">Edit</a></td>
                                                    <td><a href="/admin/category/delete/{{$rs->id}}"
                                                           class="btn btn-danger btn-rounded btn-fw">Delete</a></td>
                                                    <td><a href="/admin/category/show/{{$rs->id}}"
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
