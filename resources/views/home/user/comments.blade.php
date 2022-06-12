@extends('layouts.home')

@section('title','User Comments')
@section('icon',Storage::url($setting->icon))


@section('content')
    <div class="container" style="font-size: large">
        <div class="row">
            <div class="col-md-12">
                <center>
                    <h4><a href="{{route('index')}}">Home</a>/<a href="{{{route('userpanel_home')}}}">User Panel</a>/<a href="{{{route('userpanel_reviews')}}}">Comments & Reviews</a>
                    </h4>
                </center>
            </div>

        </div>
        <div class="container margin-top">
            <div class="contact-wrapper">
                <div class="row">
                    <div class="col-md-2">
                        <center>
                            <h1 style="font-size: large">User Comments & Reviews</h1>
                        </center>

                        @include('home.user.usermenu')
                    </div>

                    <div class="col-md-10">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Car</th>
                                    <th>Comment</th>
                                    <th>Subject</th>
                                    <th>Rate</th>
                                    <th>Status</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($comments as $rs)

                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->user->name}}</td>
                                        <td>
                                            <a href="{{route('car',['id'=>$rs->car_id])}}">{{$rs->car->title}}</a>
                                        </td>
                                        <td>{{$rs->comment}}</td>
                                        <td>About the Car</td>
                                        <td>{{$rs->rate}}</td>
                                        <td>{{$rs->status}}</td>
                                        <td style="text-align: center">
                                            <a class="btn btn-danger btn-rounded btn-fw"
                                               style="color: white;"
                                               href="{{route('userpanel_review_destroy',['id'=>$rs->id])}}"
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

@endsection
