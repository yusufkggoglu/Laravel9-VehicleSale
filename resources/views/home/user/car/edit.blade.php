@extends('layouts.home')

@section('title', 'Edit Car')
@section('icon',Storage::url($setting->icon))

@section('js')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="container" style="">
        <center>
            <h4><a href="{{route('index')}}">Home</a>/<a href="{{{route('user_car_posting')}}}">My Posting</a></h4>
        </center>
    </div>
    <div class="container">
        <h4 class="card-title">EDIT CAR : {{$data->title}}</h4>

        <form class="form" action="/user/car/update/{{$data->id}}" method="post"
              enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="user_id" value="{{\Illuminate\Support\Facades\Auth::id()}}">
            <div class="form-group">
                <label>Parent Category</label>

                <select class="form-control select2" name="category_id">
                    @foreach($datalist as $rs)
                        <option value="{{$rs->id}}"
                                @if($rs->id == $data->category_id) selected="selected" @endif>
                            {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="{{$data->title}}">
            </div>
            <div class="form-group">
                <label>Keywords</label>
                <input type="text" name="keywords" class="form-control" value="{{$data->keywords}}">
            </div>
            <div class="form-group">
                <label>Description</label>
                <input type="text" name="description" class="form-control"
                       value="{{$data->description}}">
            </div>
            <div class="form-group">
                <label>Brand</label>
                <select class="form-control select2" name="brand_id">
                    @foreach($brand as $rs)
                        <option value="{{$rs->id}}"
                                @if($rs->id == $data->brand_id) selected="selected" @endif>
                            {{$rs->title}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Model</label>
                <input type="text" name="model" class="form-control" value="{{$data->model}}">
            </div>
            <div class="form-group">
                <label>Series</label>
                <input type="text" name="seri" class="form-control" value="{{$data->seri}}">
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="number" name="price" class="form-control" value="{{$data->price}}">
            </div>
            <div class="form-group">
                <label>Year</label>
                <input type="number" name="yil" class="form-control" value="{{$data->yil}}">
            </div>
            <div class="form-group">
                <label>KM</label>
                <input type="number" name="km" class="form-control" value="{{$data->km}}">
            </div>
            <div class="form-group">
                <label>Fuel Type</label>
                <select class="form-control" name="yakit_turu">
                    <option selected>{{$data->yakit_turu}}</option>
                    <option>Benzin</option>
                    <option>Dizel</option>
                    <option>LPG</option>
                    <option>Electricity</option>
                </select>
            </div>
            <div class="form-group">
                <label>Gear</label>
                <select class="form-control" name="vites">
                    <option selected>{{$data->vites}}</option>
                    <option>Automatic</option>
                    <option>Manuel</option>
                </select></div>
            <div class="form-group">
                <label>Door</label>
                <input type="number" name="kapi" class="form-control" value="{{$data->kapi}}">
            </div>
            <div class="form-group">
                <label>Color</label>
                <input type="text" name="renk" class="form-control" value="{{$data->renk}}">
            </div>
            <div class="form-group">
                <label>Case</label>
                <select class="form-control" name="durum">
                    <option selected>{{$data->durum}}</option>
                    <option>0 (Yeni)</option>
                    <option>İkinci el</option>
                </select>
            </div>
            <div class="form-group">
                <label>Detail</label>
                <textarea class="textarea" id="detail" name="detail">{{$data->detail}}</textarea>
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="file" name="image" class="file-upload-default">

            </div>
            <div class="form-group">
                <label>Status</label>
                <select class="form-control" name="status">
                    <option selected>{{$data->status}}</option>
                    <option>True</option>
                    <option>False</option>
                </select>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Update Data</button>
            </div>
        </form>
    </div>

@endsection

@section('footer')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
        $(function () {
            //Summernote
            $('.textarea').summernote()
        })
    </script>
@endsection
