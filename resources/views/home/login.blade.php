@extends('layouts.home')

@section('title','User Login')
@section('content')
    <div class="container" style="">
        <center>
            <h4><a href="{{route('index')}}">Home</a>/<a href="/loginuser">User Login</a></h4>
        </center>
    </div>
    <div class="container">
        <h1>User Login</h1>
        <hr style="width: 1200px">
        @include('auth.login')
    </div>
@endsection
