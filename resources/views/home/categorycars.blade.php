@extends('layouts.home')

@section('title',$category->title ,  ' Cars')

@section('content')
    <div class="container">
        <center>
            <h4><a href="/">Home</a>/<a
                    href="/categorycars/{{$category->id}}/{{$category->title}}">{{$category->title}}</a></h4>
        </center>
    </div>
    <div class="container margin-top">
        <div class="main-title">
            <h1>FILTER</h1>
            <div class="container-fluid">

                <div>
                    <label for="cars">Brand:</label>
                    <select name="cars" id="cars">
                        <option value="volvo">Volvo</option>
                        <option value="saab">Saab</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
                <div>
                    <label for="cars">Color:</label>
                    <select name="color" id="color">
                        <option value="volvo">Siyah</option>
                        <option value="saab">Beyaz</option>
                        <option value="mercedes">Mavi</option>
                        <option value="audi">Kırmızı</option>
                    </select>
                </div>

            </div>
        </div>
        <h1>SORT BY</h1>

        <div class="portfolio-wrapper">
            <button class="nav">
                <span class="icon-container">
                    <span class="line line01"></span>
                    <span class="line line02"></span>
                    <span class="line line03"></span>
                    <span class="line line04"></span>
                </span>
            </button>
            <div class="works-filter">
                <a href="javascript:void(0)" class="filter active" data-filter="mix">All</a>
                <a href="javascript:void(0)" class="filter" data-filter="branding">Branding</a>
                <a href="javascript:void(0)" class="filter" data-filter="web">Web Design</a>
                <a href="javascript:void(0)" class="filter" data-filter="graphic">Graphic Design</a>
            </div>

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
            <div class="load-more">
                <a href="javascript:void(0)" id="load-more"><i class="icon-refresh"></i></a>
            </div>
        </div>
    </div>
@endsection
