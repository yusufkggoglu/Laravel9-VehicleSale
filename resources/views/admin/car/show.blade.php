@extends('layouts.admin')

@section('title', 'Show Car : '.$data->title)

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 style="font-size: large" class="card-title">{{$data->title}} Details</h4>
                            <div>
                                <td><a href="/admin/car/edit/{{$data->id}}"
                                       class="btn btn-primary btn-rounded btn-fw">Edit</a></td>
                                <td><a href="/admin/car/delete/{{$data->id}}"
                                       class="btn btn-danger btn-rounded btn-fw">Delete</a></td>
                            </div>
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                    <tr>
                                        <th style="width: 30px">ID</th>
                                        <td>{{$data->id}}</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 30px">Category</th>
                                        <td>{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($data->category,$data->category->title)}}</td>

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
                                        <th style="width: 30px">Brand</th>
                                        <td>{{$data->brand}}</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 30px">Price</th>
                                        <td>{{$data->price}} ₺</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 30px">Model</th>
                                        <td>{{$data->model}}</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 30px">Series</th>
                                        <td>{{$data->seri}}</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 30px">Fuel Type</th>
                                        <td>{{$data->yakit_turu}}</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 30px">KM</th>
                                        <td>{{$data->km}} km</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 30px">Year</th>
                                        <td>{{$data->yil}}</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 30px">Gear</th>
                                        <td>{{$data->vites}}</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 30px">Door</th>
                                        <td>{{$data->kapi}} Door</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 30px">Color</th>
                                        <td>{{$data->renk}}</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 30px">Case</th>
                                        <td>{{$data->durum}}</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 30px">Gear</th>
                                        <td>{{$data->vites}}</td>
                                    </tr>
                                    <tr>
                                        <th style="width: 30px">Detail</th>
                                        <td>{!! $data->detail !!}</td>
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
