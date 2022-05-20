@extends('layouts.home')

@section('title','References | '.$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))


@section('content')
    <div class="container" style="">
        <center>
            <h4><a href="{{route('index')}}">Home</a>/<a href="{{{route('references')}}}">References</a></h4>
        </center>
    </div>
    <div class="container">
        <center>
            <h1>References</h1>
        </center>
        {!! $setting->references !!}
    </div>
@endsection
