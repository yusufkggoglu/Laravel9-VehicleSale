@extends('layouts.admin')

@section('title', 'Settings ')

@section('js')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="main-panel">
        <div class="container-fluid page-body-wrapper pt-0 proBanner-padding-top">
            <div class="container">
                <form class="form" action="{{route('admin_setting_update')}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 col-sm-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body dashboard-tabs p-0">
                                    <ul class="nav nav-tabs px-4" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="general-tab" data-bs-toggle="tab"
                                               href="#general"
                                               role="tab" aria-controls="general" aria-selected="true">General</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="smtp-tab" data-bs-toggle="tab" href="#smtp"
                                               role="tab" aria-controls="smtp" aria-selected="false">SMTP E-mail</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="social-tab" data-bs-toggle="tab" href="#social"
                                               role="tab" aria-controls="social" aria-selected="false">Social Media</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="about-tab" data-bs-toggle="tab" href="#about"
                                               role="tab" aria-controls="about" aria-selected="false">About Us</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact"
                                               role="tab" aria-controls="contact" aria-selected="false">Contact Page</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="references-tab" data-bs-toggle="tab"
                                               href="#references"
                                               role="tab" aria-controls="references"
                                               aria-selected="false">References</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content py-0 px-0">
                                        <div class="tab-pane fade show active" id="general" role="tabpanel"
                                             aria-labelledby="general-tab">
                                            <div class="d-flex flex-wrap justify-content-xl-between">
                                                <div
                                                    class="d-none d-xl-flex border-md-right flex-grow-1 align-items-left justify-content-left p-3 item">

                                                    <div class="d-flex flex-column justify-content-around">

                                                        <h4 class="card-title">General Settings</h4>
                                                        <input type="hidden" id="id" name="id"
                                                               value="{{$data->id}}">
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Title</label>
                                                            <input type="text" class="form-control"
                                                                   name="title" value="{{$data->title}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Keywords</label>
                                                            <input type="text" class="form-control"
                                                                   name="keywords" value="{{$data->keywords}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Description</label>
                                                            <input type="text" class="form-control"
                                                                   name="description"
                                                                   value="{{$data->description}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Company</label>
                                                            <input type="text" class="form-control"
                                                                   name="company" value="{{$data->company}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Address</label>
                                                            <input type="text" class="form-control"
                                                                   name="address" value="{{$data->address}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Phone</label>
                                                            <input type="tel" class="form-control"
                                                                   name="phone" value="{{$data->phone}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail3">Email address</label>
                                                            <input type="email" class="form-control"
                                                                   name="email" value="{{$data->email}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleSelectGender">Status</label>
                                                            <select class="form-control" name="status">
                                                                <option selected>{{$data->status}}</option>
                                                                <option>True</option>
                                                                <option>False</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Icon</label>
                                                            <input type="file" name="icon"
                                                                   class="file-upload-default">
                                                            <div class="input-group col-xs-12">
                                                                <input type="text"
                                                                       class="form-control file-upload-info"
                                                                       disabled
                                                                       placeholder="Choose Image File">
                                                                <div class="custom-file">
                                                                    <input type="file" name="icon"
                                                                           class="custom-file-input">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="smtp" role="tabpanel" aria-labelledby="smtp-tab">
                                            <div class="d-flex flex-wrap justify-content-xl-between">
                                                <div
                                                    class="d-none d-xl-flex border-md-right flex-grow-1 align-items-left justify-content-left p-3 item">
                                                    <div class="d-flex flex-column justify-content-around">
                                                        <h4 class="card-title">SMTP E-MAIL SETTINGS</h4>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">SMTP SERVER</label>
                                                            <input type="text" class="form-control"
                                                                   name="smtpserver" value="{{$data->smtpserver}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputEmail3">SMTP E-mail</label>
                                                            <input type="email" name="smtpemail"
                                                                   class="form-control" id="exampleInputEmail3"
                                                                   value="{{$data->email}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputPassword4">SMTP
                                                                Passsword</label>
                                                            <input type="password" name="smtppassword"
                                                                   class="form-control"
                                                                   id="exampleInputPassword4"
                                                                   value="{{$data->password}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">SMTP Port</label>
                                                            <input type="number" class="form-control"
                                                                   name="smtpport" value="{{$data->smtpport}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="social" role="tabpanel"
                                             aria-labelledby="social-tab">
                                            <div class="d-flex flex-wrap justify-content-xl-between">
                                                <div
                                                    class="d-none d-xl-flex border-md-right flex-grow-1 align-items-left justify-content-left p-3 item">

                                                    <div class="d-flex flex-column justify-content-around">


                                                        <h4 class="card-title">SOCIAL MEDIA</h4>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Fax</label>
                                                            <input type="text" class="form-control"
                                                                   name="fax" value="{{$data->fax}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Facebook</label>
                                                            <input type="text" class="form-control"
                                                                   name="facebook" value="{{$data->facebook}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Instagram</label>
                                                            <input type="text" class="form-control"
                                                                   name="instagram" value="{{$data->instagram}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Twitter</label>
                                                            <input type="text" class="form-control"
                                                                   name="twitter" value="{{$data->twitter}}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="exampleInputName1">Youtube</label>
                                                            <input type="text" class="form-control"
                                                                   name="youtube" value="{{$data->youtube}}">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="about" role="tabpanel"
                                             aria-labelledby="about-tab">
                                            <div class="d-flex flex-wrap justify-content-xl-between">
                                                <div
                                                    class="d-none d-xl-flex border-md-right flex-grow-1 align-items-left justify-content-left p-3 item">
                                                    <div class="d-flex flex-column justify-content-around">
                                                        <h4 class="card-title">About Us</h4>
                                                        <div class="form-group">
                                                            <label for="exampleTextarea1">About Us</label>
                                                            <textarea name="aboutus"
                                                                      class="form-control" id="aboutus"
                                                                      rows="4">{{$data->aboutus}}
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="contact" role="tabpanel"
                                             aria-labelledby="contact-tab">
                                            <div class="d-flex flex-wrap justify-content-xl-between">
                                                <div
                                                    class="d-none d-xl-flex border-md-right flex-grow-1 align-items-left justify-content-left p-3 item">
                                                    <div class="d-flex flex-column justify-content-around">
                                                        <h4 class="card-title">Contact Page</h4>
                                                        <div class="form-group">
                                                            <label for="exampleTextarea1">References</label>
                                                            <textarea name="contactt"
                                                                      class="form-control" id="contactt"
                                                                      rows="4">{{$data->contact}}
                                                            </textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="references" role="tabpanel"
                                             aria-labelledby="references-tab">
                                            <div class="d-flex flex-wrap justify-content-xl-between">
                                                <div
                                                    class="d-none d-xl-flex border-md-right flex-grow-1 align-items-left justify-content-left p-3 item">
                                                    <div class="d-flex flex-column justify-content-around">
                                                        <h4 class="card-title">References</h4>
                                                        <div class="form-group">
                                                            <label for="exampleTextarea1">References</label>
                                                            <textarea name="references"
                                                                      class="form-control" id="referencess"
                                                                      rows="4">{{$data->references}}</textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary col-12">
                                            Update
                                            Setting
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>


@endsection

@section('footer')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#aboutus').summernote();
            $('#contactt').summernote();
            $('#referencess').summernote();
        });
    </script>
@endsection
