@extends('layouts.home')

@section('title',$data->title)
@section('description')
    Türkiyenin en güvenilir ve en çok ürün bulunduran araç sitesi...
@endsection
@section('keywords','Araç,Araba,Satılık,Satılık Araba,Sedan,Hatchback')

@section('content')


    <div class="container">
        <center>
            <h4><a href="#">{{$data->category->title}}</a>/<a href="#">{{$data->title}}</a></h4>
        </center>
    </div>
    <div class="container">
        <div class="single-project-slider">
            <div class="owl-carousel single-slider">
                @foreach($images as $rs)
                    <div>
                        <img class="img-responsive center-block" src="{{Storage::url($rs->image)}}"
                             alt="slider">
                    </div>
                @endforeach
            </div>
            <div class="single-controls">
                <span class="arrow-left"><a class="prev-slide" href="javascript:void(0)"><i
                            class="pe-7s-angle-left"></i></a></span>
                <span class="arrow-right"><a class="next-slide" href="javascript:void(0)"><i
                            class="pe-7s-angle-right"></i></a></span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="single-portfolio-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <center><h1>{{$data->title}}</h1>
                        <h1>{{$data->price}}₺</h1>
                    </center>
                </div>
                <div class="col-md-5 col-md-offset-1 col-sm-4">
                    <p>{!!$data->detail!!}</p>
                </div>
                <div class="col-md-5 col-md-offset-1 col-sm-4">

                    <div class="row-cols-2">
                        <table class="table">
                            <tbody>
                            <tr>
                                <td>CATEGORİ:</td>
                                <td>{{$data->category->title}}</td>
                            </tr>
                            <tr>
                                <td>MARKA:</td>
                                <td>{{$data->brand}}</td>
                            </tr>
                            <tr>
                                <td>SERİ:</td>
                                <td>{{$data->seri}}</td>
                            </tr>
                            <tr>
                                <td>MODEL:</td>
                                <td>{{$data->model}}</td>
                            </tr>
                            <tr>
                                <td>YIL:</td>
                                <td>{{$data->yil}}</td>
                            </tr>
                            <tr>
                                <td>KM:</td>
                                <td>{{$data->km}}km</td>
                            </tr>
                            <tr>
                                <td>YAKIT TÜRÜ:</td>
                                <td>{{$data->yakit_turu}}</td>
                            </tr>
                            <tr>
                                <td>RENK:</td>
                                <td>{{$data->renk}}</td>
                            </tr>
                            <tr>
                                <td>VİTES:</td>
                                <td>{{$data->vites}}</td>
                            </tr>
                            <tr>
                                <td>Share:</td>
                                <td>
                                    <ul class="social-buttons">
                                        <li><a href="javasript:void(0);" data-social="fb"><i
                                                    class="iconmoon-facebook"></i></a></li>
                                        <li>
                                            <a href="javascript:void(0);" data-social="tw"> <i
                                                    class="iconmoon-twitter"></i></a>
                                        </li>
                                        <li><a href="javascript:void(0);" data-social="pt"><i
                                                    class="iconmoon-pinterest"></i></a></li>
                                        <li><a href="javascript:void(0);" data-social="ln"><i
                                                    class="iconmoon-linkedin"></i></a></li>
                                    </ul>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container margin-top">
        <div class="main-title">
            <h1>SIMILAR CAR</h1>
            <hr>
            <h6>See also our other cars</h6>
        </div>
        <div class="js-masonry">
            <div class="row" id="work-grid">
                <!-- Begin of Thumbs Portfolio -->
                @foreach($carlist2 as $rs)
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
@section('footerjs')
    <a href="javascript:void(0)" class="scroll-top" id="scroll-top"><i
            class="pe-7s-angle-up"></i></a>
@endsection
