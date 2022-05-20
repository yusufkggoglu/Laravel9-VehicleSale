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

    <div class="footer margin-top">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-4 col-xs-12">
                    <div class="footer-inner">
                        <div class="footer-content">
                            <h4>O.A.K THEME</h4>
                            <address>
                                City 35 AM <br>
                                Street 1395 p.n <br>
                                your Country
                            </address>
                        </div>
                    </div>
                </div>

                <div class="col-md-2 col-md-push-8 col-sm-4 col-xs-12">
                    <div class="footer-inner">
                        <div class="footer-content">
                            <h4>CONTACT INFO</h4>
                            <p>
                                T:003 124 115
                                <br> E:info@mail.com
                                <br> W:www.website.com
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="footer-inner">
                        <div class="footer-content">
                            <ul class="social-media">
                                <li><a href="#"><i class="iconmoon-facebook"></i></a></li>
                                <li><a href="#"><i class="iconmoon-twitter"></i></a></li>
                                <li><a href="#"><i class="iconmoon-flickr2"></i></a></li>
                                <li><a href="#"><i class="iconmoon-dribbble3"></i></a></li>
                                <li><a href="#"><i class="iconmoon-pinterest"></i></a></li>
                                <li><a href="#"><i class="iconmoon-linkedin2"></i></a></li>
                            </ul>
                            <span class="copyright-mark">&copy; 2015 OAK, ALL RIGHTS RESERVED</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
