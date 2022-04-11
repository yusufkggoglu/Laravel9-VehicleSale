@extends('layouts.admin')

@section('title', 'Add Category ')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <center>
                    <h1 style="color: #0e4cfd"> CATEGORIES</h1>
                </center>
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Category List</h4>

                            <div class="template-demo">
                                <div class="card-body">
                                    <h4 class="card-title">Category Table</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Parent</th>
                                                <th>Title</th>
                                                <th>Status</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($datalist as $rs)

                                                <tr>
                                                    <td>{{$rs->id}}</td>
                                                    <td>{{$rs->parent_id}}</td>
                                                    <td>{{$rs->title}}</td>
                                                    <td>{{$rs->status}}</td>
                                                    <td>Edit</td>
                                                    <td>Delete</td>

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
