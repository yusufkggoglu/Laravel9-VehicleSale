@extends('layouts.home')

@section('title',$data->title)
@section('icon',Storage::url($setting->icon))

@section('headerjs')


@endsection
@section('content')

    <div class="container">
        <center>
            <h4><a href="#">{{$data->category->title}}</a>/<a href="#">{{$data->title}}</a></h4>
        </center>
    </div>
    @include('home.messages')

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
                                <td>CATEGORY:</td>
                                <td>{{$data->category->title}}</td>
                            </tr>
                            <tr>
                                <td>USER:</td>
                                @foreach($user as $temp)
                                    @if($data->user_id==$temp->id)
                                        <td>{{$temp->name}}</td>
                                    @endif
                                @endforeach
                                @if($data->user_id==null)
                                    <td></td>@endif
                                <td>
                            </tr>
                            <tr>
                                <td>TEL NUMBER:</td>
                                <td>{{$data->telno}}</td>
                            </tr>
                            <tr>
                                <td>BRAND:</td>
                                @foreach($brand as $temp)
                                    @if($data->brand_id==$temp->id)
                                        <td>{{$temp->title}}</td>
                                    @endif
                                @endforeach
                                @if($data->brand_id==null)
                                    <td></td>@endif
                                <td>
                            </tr>
                            <tr>
                                <td>SERIES:</td>
                                <td>{{$data->seri}}</td>
                            </tr>
                            <tr>
                                <td>MODEL:</td>
                                <td>{{$data->model}}</td>
                            </tr>
                            <tr>
                                <td>YEAR:</td>
                                <td>{{$data->yil}}</td>
                            </tr>
                            <tr>
                                <td>KM:</td>
                                <td>{{$data->km}}km</td>
                            </tr>
                            <tr>
                                <td>FUEL TYPE:</td>
                                <td>{{$data->yakit_turu}}</td>
                            </tr>
                            <tr>
                                <td>COLOR:</td>
                                <td>{{$data->renk}}</td>
                            </tr>
                            <tr>
                                <td>GEAR TYPE:</td>
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
    <section id="comments">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <form action="{{route('storecomment')}}" method="post">
                        @csrf
                        <input class="input" type="hidden" name="car_id" value="{{$data->id}}">
                        <h3 class="pull-left"><b>Your Comment</b></h3>

                        <fieldset>
                            <div class="col-sm-10">
                                <div class="form-group col-xs-12 col-sm-5 col-lg-10">
                                <textarea style="width:580px;height: 150px" class="form-control" name="comment"
                                          placeholder="Your message" required=""></textarea>
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group-lg">
                            <h1>RATING </h1>
                            <input type="radio" name="rate" value="1">
                            <label>⭐</label><br>
                            <input type="radio" name="rate" value="2">
                            <label>⭐⭐</label><br>
                            <input type="radio" name="rate" value="3">
                            <label>⭐⭐⭐</label><br>
                            <input type="radio" name="rate" value="4">
                            <label>⭐⭐⭐⭐</label><br>
                            <input type="radio" name="rate" value="5">
                            <label>⭐⭐⭐⭐⭐</label><br>

                        </div>
                        @auth
                            <button type="submit" class="btn btn-normal pull-right">Submit</button>
                        @else
                            <a href="/login" class="btn btn-normal pull-right"> For submit Your Review, Please Login</a>
                        @endauth
                    </form>
                    <div class="main-title">
                        @php
                            $average=$data->comment->average('rate')
                        @endphp
                        <h1>COMMENTS ({{$data->comment->count('id')}})
                            @if ($average==1)⭐ @endif
                            @if ($average==2)⭐⭐ @endif
                            @if ($average==3)⭐⭐⭐@endif
                            @if ($average==4)⭐⭐⭐⭐@endif
                            @if ($average==5)⭐⭐⭐⭐⭐@endif
                        </h1>
                        <hr>
                    </div>
                    <!-- COMMENT -->
                    @foreach($comment as $rs)
                        <br>

                        <div class="media">
                            <a class="pull-left" href="#"></a>
                            <div class="media-body">
                                <h1 style="color: gray" class="media-heading">{{$rs->user->name}}</h1>
                                @if ($rs->rate==1)⭐ @endif
                                @if ($rs->rate==2)⭐⭐ @endif
                                @if ($rs->rate==3)⭐⭐⭐@endif
                                @if ($rs->rate==4)⭐⭐⭐⭐@endif
                                @if ($rs->rate==5)⭐⭐⭐⭐⭐@endif
                                <p>{{$rs->comment}}</p>
                                <ul class="list-unstyled list-inline media-detail pull-left">
                                    <li style="color: #4a4a4b"><i class="fa fa-calendar"></i>{{$rs->created_at}}</li>
                                </ul>

                            </div>
                        </div>
                @endforeach
                <!-- COMMENT -->
                </div>
            </div>
        </div>
    </section>

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
                    @if($rs->id==$data->id)


                    @endif
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
    </div>
@endsection
@section('footerjs')
    <a href="javascript:void(0)" class="scroll-top" id="scroll-top"><i
            class="pe-7s-angle-up"></i></a>


@endsection

