@extends('layouts.home')

@section('title','Contact | '.$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))

@section('content')
    <div class="container" style="">
        <center>
            <h4><a href="{{route('index')}}">Home</a>/<a href="{{{route('contact')}}}">Contact</a></h4>
        </center>
    </div>
    <div class="container">
        <div class="contact-map" id="map">
            <img class="img-responsive center-block" src="{{asset('assets')}}/img/contact-banner.jpeg" alt="">

        </div>

        <div class="col-md-6   hidden-xs">

            <div class="row">
                <div class="inner-map">
                    <div class="inner-map-content ">
                        <h1>Contact</h1>
                        <hr>
                        <p>Contact with us is now very easy</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container margin-top">
        <div class="contact-wrapper">
            <div class="row">
                @include('home.messages')
                {!! $setting->contact !!}
                <form action="{{route('storemessage')}}" method="post">
                    @csrf
                    <div class="contact-form">
                        <div class="col-md-4">
                            <input type="text" name="name" placeholder="FIRST NAME *">
                            <input type="text" name="lastname" placeholder="LAST NAME *">
                            <input type="text" name="phone" placeholder="TELEPHONE *">
                            <input type="text" name="email" placeholder="E-MAIL *">
                            <input type="text" name="subject" placeholder="SUBJECT">
                        </div>
                        <div class="col-md-5">
                            <textarea name="message" placeholder="MESSAGE"></textarea>
                            <input type="submit" value="SEND">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
