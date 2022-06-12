@extends('layouts.home')

@section('title',$category->title ,  ' Cars')
@section('icon',Storage::url($setting->icon))

@section('content')
    <div class="container">
        <center>
            <h4><a href="/">Home</a>/<a
                    href="/categorycars/{{$category->id}}/{{$category->title}}">{{$category->title}}</a></h4>
        </center>
    </div>
    <div class="container">
        <div class="row">
            <div class="js-masonry">
                <div class="row" id="work-grid">
                    <!-- Begin of Thumbs Portfolio -->
                    @foreach($cars as $rs)
                        <div class="col-md-4 col-sm-4 col-xs-12 mix web">

                            <div class="img home-portfolio-image">
                                <img src="{{Storage::url($rs->image)}}" style="width:370px;height:300px "
                                     alt="Portfolio Item">
                                <div class="overlay-thumb">
                                    <a href="javascript:void(0)" class="like-product">
                                        <i class="ion-ios-heart-outline"></i>
                                        <span class="like-product">Liked</span>
                                        <span class="output">60</span>
                                    </a>
                                    <div class="details">
                                        <span class="title">{{$rs->title}}</span>
                                        <span class="info">{{$rs->price}}₺</span>
                                    </div>
                                    <span class="btnBefore"></span>
                                    <span class="btnAfter"></span>
                                    <a class="main-portfolio-link" href="{{route('car',['id'=>$rs->id])}}"></a>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
@endsection
