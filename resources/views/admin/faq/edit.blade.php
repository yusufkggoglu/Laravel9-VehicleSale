@extends('layouts.admin')

@section('title', 'Edit FAQ')

@section('js')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">EDIT FAQ : {{$data->title}}</h4>

                            <form class="form" action="/admin/faq/update/{{$data->id}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Question</label>
                                    <input type="text" name="question" class="form-check" value="{{$data->question}}">
                                </div>
                                <div class="form-group">
                                    <label>Answer</label>
                                    <textarea class="textarea" id="answer" name="answer">"{{$data->answer}}"</textarea>
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
                    </div>
                </div>
            </div>
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
