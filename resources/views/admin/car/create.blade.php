@extends('layouts.admin')

@section('title', 'Add Car')

@section('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
@endsection

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add Car Menu</h4>

                            <form class="form" action="{{route('admin_car_store')}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Parent Category</label>
                                    <select class="form-control select2" name="category_id">
                                        @foreach($data as $rs)
                                            <option
                                                value="{{$rs->id}}">{{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Title">
                                </div>
                                <div class="form-group">
                                    <label>Keywords</label>
                                    <input type="text" name="keywords" class="form-control" placeholder="Keywords">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" name="description" class="form-control"
                                           placeholder="Description">
                                </div>
                                <div class="form-group">
                                    <label>Brand</label>
                                    <input type="text" name="brand" class="form-control" placeholder="Brand">
                                </div>
                                <div class="form-group">
                                    <label>Model</label>
                                    <input type="text" name="model" class="form-control" placeholder="Model">
                                </div>
                                <div class="form-group">
                                    <label>Series</label>
                                    <input type="text" name="seri" class="form-control" placeholder="Series">
                                </div>
                                <div class="form-group">
                                    <label>Price</label>
                                    <input type="number" name="price" class="form-control" value="0">
                                </div>
                                <div class="form-group">
                                    <label>Year</label>
                                    <input type="number" name="yil" class="form-control" value="0">
                                </div>
                                <div class="form-group">
                                    <label>KM</label>
                                    <input type="number" name="km" class="form-control" value="0">
                                </div>
                                <div class="form-group">
                                    <label>Fuel Type</label>
                                    <select class="form-control" name="yakit_turu">
                                        <option>Benzin</option>
                                        <option>Dizel</option>
                                        <option>LPG</option>
                                        <option>Electricity</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Gear</label>
                                    <select class="form-control" name="vites">
                                        <option>Automatic</option>
                                        <option>Manuel</option>
                                    </select></div>
                                <div class="form-group">
                                    <label>Door</label>
                                    <input type="number" name="kapi" class="form-control" value="0">
                                </div>
                                <div class="form-group">
                                    <label>Color</label>
                                    <input type="text" name="renk" class="form-control" placeholder="Color">
                                </div>
                                <div class="form-group">
                                    <label>Case</label>
                                    <select class="form-control" name="durum">
                                        <option>0 (Yeni)</option>
                                        <option>İkinci el</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="image" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" disabled
                                               placeholder="Choose Image File">
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Detail</label>
                                    <textarea class="form-check" id="detail" name="detail" style="width: 700px; height: 150px">

                                    </textarea>
                                    <script>
                                        ClassicEditor
                                            .create(document.querySelector('#detail'))
                                            .then(editor =>{
                                                    console.log(editor);
                                            })
                                            .catch(error=>{
                                                    console.error(error);
                                            })
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <select class="form-control" name="status">
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
