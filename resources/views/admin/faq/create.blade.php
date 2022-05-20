@extends('layouts.admin')

@section('title', 'Add Faq')

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
                            <h4 class="card-title">Add Faq Menu</h4>

                            <form class="form" action="{{route('admin_faq_store')}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label>Question</label>
                                    <input type="text" name="question" class="form-control"
                                           placeholder="Write Question">
                                </div>
                                <div class="form-group">
                                    <label>Answer</label>
                                    <textarea class="form-check" id="answer" name="answer"
                                              placeholder="Write Your Answer"></textarea>
                                    <script>
                                        ClassicEditor
                                            .create(document.querySelector('#answer'))
                                            .then(editor => {
                                                console.log(editor);
                                            })
                                            .catch(error => {
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
