@extends('layouts.admin')

@section('title', 'Add Category')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add Category Menu</h4>

                            <form class="form" action="{{route('admin_category_store')}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Parent Category</label>
                                    <select class="form-control select2" name="parent_id">
                                        <option value="0" selected="selected">Main Category</option>
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
