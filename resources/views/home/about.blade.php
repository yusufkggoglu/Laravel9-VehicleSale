@extends('layouts.home')

@section('title','About Us | '.$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))


@section('content')
    <div class="container" style="">
        <center>
            <h4><a href="{{route('index')}}">Home</a>/<a href="{{{route('about')}}}">About Us</a></h4>
        </center>
    </div>
    <div class="container">
        {!! $setting->aboutus !!}
    </div>
@endsection
