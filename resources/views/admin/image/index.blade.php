@extends('layouts.adminwindow')

@section('title', 'Car Image Gallery ')

@section('content')
    <center>
        <h2>{{$car->title}}</h2>
    </center>
    <hr>
    <form class="form" action="{{route('admin_image_store',['pid'=>$car->id])}}" method="post"
          enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Title</label>
                    <div class="col-sm-9">
                        <input type="text" name="title" class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group row">
                    <div class="col-sm-9">
                        <input type="file" name="image" class="file-upload-default">
                        <div class="input-group-append">
                            <!-- <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image"> -->
                            <input type="file" name="image" class="custom-file-default">
                            <button class="file-upload-browse btn btn-primary" type="submit">Upload</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- start -->
    <div class="card-body">
        <h4 style="font-size: large" class="card-title">Car Image List</h4>

        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($images as $rs)

                    <tr>
                        <td>{{$rs->id}}</td>
                        <td>{{$rs->title}}</td>
                        <td>
                            @if($rs->image)
                                <img src="{{Storage::url($rs->image)}}"
                                     style=" border-radius:2px ; height:200px ;width: 300px">

                            @endif
                        </td>
                        <td>
                            <a class="btn btn-danger btn-rounded btn-fw"
                               style="color: white;"
                               href="{{route('admin_image_delete',['pid'=>$car->id,'id'=>$rs->id])}}"
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

    </div>
    </div>
@endsection

