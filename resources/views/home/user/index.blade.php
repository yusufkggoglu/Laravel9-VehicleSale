@extends('layouts.home')

@section('title','User Panel')
@section('icon',Storage::url($setting->icon))


@section('content')
    <div class="container" style="font-size: large">
        <div class="row">
            <div class="col-md-12">
                <center>
                    <h4><a href="{{route('index')}}">Home</a>/<a href="{{{route('userpanel_home')}}}">User Panel</a>
                    </h4>
                </center>
            </div>

        </div>
        <div class="container margin-top">
            <div class="contact-wrapper">
                <div class="row">
                    <div class="col-md-2">
                        <center>
                            <h1 style="font-size: large">User Panel</h1>
                        </center>

                        @include('home.user.usermenu')
                    </div>

                    <div class="col-md-10">
                        <h1 style="font-size: large">User Profile</h1>
                        @include('profile.show')
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
