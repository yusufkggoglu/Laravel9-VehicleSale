@extends('layouts.home')

@section('title', 'Laravel Vehicle Car')
@section('description')
    Türkiyenin en güvenilir ve en çok ürün bulunduran araç sitesi...
@endsection
@section('keywords','Araç,Araba,Satılık,Satılık Araba,Sedan,Hatchback')

@section('content')
    @include('home._slider')
    <div class="container margin-top">
        <div class="history-wrapper">
            <div class="col-md-6 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.5s">
                <div class="row">
                    <article>
                        <h1>HISTORY OF AGENCY</h1>
                        <hr>
                        <h4>WHO LOVES OR PURSUES OR DESIRES TO OBTAIN PAIN OF ITSELF, BUT BECAUSE OCCASIONALLY
                            CIRCUMSTANCES OCCUR AND PAIN CAN PROCURE HIM SOME GREAT PLEASURE</h4>
                        <p>
                            <br/>Porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                            sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                            voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                            laboriosam, nisi ut aliquid ex ea commodi modi tempora incidunt ut labore.</p>
                    </article>
                </div>
            </div>
            <div class="col-md-5 col-md-offset-1 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                <div class="row">
                    <div id="history-images" class="owl-carousel">
                        <div><img class="img-responsive center-block" src="{{asset('assets')}}/img/about_img.jpg"
                                  alt="About"></div>
                        <div><img class="img-responsive center-block" src="{{asset('assets')}}/img/about_img2.jpg"
                                  alt="About"></div>
                        <div><img class="img-responsive center-block" src="{{asset('assets')}}/img/about_img3.jpg"
                                  alt="About"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container margin-top">
        <div class="main-title">
            <h1>WHY CHOOSE US?</h1>
            <hr>
            <h6>Except to obtain some advantage from it</h6>
        </div>
        <div class="services-home-page">
            <div class="row">
                <div class="col-md-4">
                    <div class="services-icon">
                        <span class="icon-tools"></span>
                        <hr>
                    </div>
                    <h4>BRANDING</h4>
                    <p>Expound the actual teachings of the great explorer of the truth, the master-builder of human
                        happiness. No one rejects, dislikes, or avoids pleasure itself, because procure him.</p>
                </div>
                <div class="col-md-4">
                    <div class="services-icon">
                        <span class="icon-globe"></span>
                        <hr>
                    </div>
                    <h4>PLAN OF WORK</h4>
                    <p>Expound the actual teachings of the great explorer of the truth, the master-builder of human
                        happiness. No one rejects, dislikes, or avoids pleasure itself, because procure him.</p>
                </div>
                <div class="col-md-4">
                    <div class="services-icon">
                        <span class="icon-paintbrush"></span>
                        <hr>
                    </div>
                    <h4>ILUSTRATION</h4>
                    <p>Expound the actual teachings of the great explorer of the truth, the master-builder of human
                        happiness. No one rejects, dislikes, or avoids pleasure itself, because procure him.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container margin-top">
        <div class="main-title">
            <h1>OUR WORK</h1>
            <hr>
            <h6>Laborious to obtain some advantage from it</h6>
        </div>
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
                    <div class="col-md-4 col-sm-4 col-xs-12 mix branding">
                        <div class="img home-portfolio-image">
                            <img src="{{asset('assets')}}/img/home-portfolio/img_1.jpg" alt="Portfolio Item">
                            <div class="overlay-thumb">
                                <a href="javascript:void(0)" class="like-product">
                                    <i class="ion-ios-heart-outline"></i>
                                    <span class="like-product">Liked</span>
                                    <span class="output">250</span>
                                </a>
                                <div class="details">
                                    <span class="title">STYLE FASHION</span>
                                    <span class="info">NEW BAG & STYLE FASHION</span>
                                </div>
                                <span class="btnBefore"></span>
                                <span class="btnAfter"></span>
                                <a class="main-portfolio-link" href="single-project.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 mix web">
                        <div class="img home-portfolio-image">
                            <img src="{{asset('assets')}}/img/home-portfolio/img_2.jpg" alt="Portfolio Item">
                            <div class="overlay-thumb">
                                <a href="javascript:void(0)" class="like-product">
                                    <i class="ion-ios-heart-outline"></i>
                                    <span class="like-product">Liked</span>
                                    <span class="output">60</span>
                                </a>
                                <div class="details">
                                    <span class="title">WATCH-J</span>
                                    <span class="info">NEW TREND FASHION</span>
                                </div>
                                <span class="btnBefore"></span>
                                <span class="btnAfter"></span>
                                <a class="main-portfolio-link" href="single-project.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 mix graphic">
                        <div class="img home-portfolio-image">
                            <img src="{{asset('assets')}}/img/home-portfolio/img_3.jpg" alt="Portfolio Item">
                            <div class="overlay-thumb">
                                <a href="javascript:void(0)" class="like-product">
                                    <i class="ion-ios-heart-outline"></i>
                                    <span class="like-product">Liked</span>
                                    <span class="output">1060</span>
                                </a>
                                <div class="details">
                                    <span class="title">STYLE FASHION</span>
                                    <span class="info">NEW BAG & STYLE FASHION</span>
                                </div>
                                <span class="btnBefore"></span>
                                <span class="btnAfter"></span>
                                <a class="main-portfolio-link" href="single-project.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 mix branding">
                        <div class="img home-portfolio-image">
                            <img src="{{asset('assets')}}/img/home-portfolio/img_4.jpg" alt="Portfolio Item">
                            <div class="overlay-thumb">
                                <a href="javascript:void(0)" class="like-product">
                                    <i class="ion-ios-heart-outline"></i>
                                    <span class="like-product">Liked</span>
                                    <span class="output">900</span>
                                </a>
                                <div class="details">
                                    <span class="title">STYLE FASHION</span>
                                    <span class="info">NEW BAG & STYLE FASHION</span>
                                </div>
                                <span class="btnBefore"></span>
                                <span class="btnAfter"></span>
                                <a class="main-portfolio-link" href="single-project.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 mix branding">
                        <div class="img home-portfolio-image">
                            <img src="{{asset('assets')}}/img/home-portfolio/img_5.jpg" alt="Portfolio Item">
                            <div class="overlay-thumb">
                                <a href="javascript:void(0)" class="like-product">
                                    <i class="ion-ios-heart-outline"></i>
                                    <span class="like-product">Liked</span>
                                    <span class="output">979</span>
                                </a>
                                <div class="details">
                                    <span class="title">STYLE FASHION</span>
                                    <span class="info">NEW BAG & STYLE FASHION</span>
                                </div>
                                <span class="btnBefore"></span>
                                <span class="btnAfter"></span>
                                <a class="main-portfolio-link" href="single-project.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 mix branding">
                        <div class="img home-portfolio-image">
                            <img src="{{asset('assets')}}/img/home-portfolio/img_6.jpg" alt="Portfolio Item">
                            <div class="overlay-thumb">
                                <a href="javascript:void(0)" class="like-product">
                                    <i class="ion-ios-heart-outline"></i>
                                    <span class="like-product">Liked</span>
                                    <span class="output">1024</span>
                                </a>
                                <div class="details">
                                    <span class="title">STYLE FASHION</span>
                                    <span class="info">NEW BAG & STYLE FASHION</span>
                                </div>
                                <span class="btnBefore"></span>
                                <span class="btnAfter"></span>
                                <a class="main-portfolio-link" href="single-project.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 mix branding">
                        <div class="img home-portfolio-image">
                            <img src="{{asset('assets')}}/img/home-portfolio/img_7.jpg" alt="Portfolio Item">
                            <div class="overlay-thumb">
                                <a href="javascript:void(0)" class="like-product">
                                    <i class="ion-ios-heart-outline"></i>
                                    <span class="like-product">Liked</span>
                                    <span class="output">2048</span>
                                </a>
                                <div class="details">
                                    <span class="title">STYLE FASHION</span>
                                    <span class="info">NEW BAG & STYLE FASHION</span>
                                </div>
                                <span class="btnBefore"></span>
                                <span class="btnAfter"></span>
                                <a class="main-portfolio-link" href="single-project.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 mix branding">
                        <div class="img home-portfolio-image">
                            <img src="{{asset('assets')}}/img/home-portfolio/img_8.jpg" alt="Portfolio Item">
                            <div class="overlay-thumb">
                                <a href="javascript:void(0)" class="like-product">
                                    <i class="ion-ios-heart-outline"></i>
                                    <span class="like-product">Liked</span>
                                    <span class="output">256</span>
                                </a>
                                <div class="details">
                                    <span class="title">STYLE FASHION</span>
                                    <span class="info">NEW BAG & STYLE FASHION</span>
                                </div>
                                <span class="btnBefore"></span>
                                <span class="btnAfter"></span>
                                <a class="main-portfolio-link" href="single-project.html"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12 mix branding">
                        <div class="img home-portfolio-image">
                            <img src="{{asset('assets')}}/img/home-portfolio/img_9.jpg" alt="Portfolio Item">
                            <div class="overlay-thumb">
                                <a href="javascript:void(0)" class="like-product">
                                    <i class="ion-ios-heart-outline"></i>
                                    <span class="like-product">Liked</span>
                                    <span class="output">256</span>
                                </a>
                                <div class="details">
                                    <span class="title">STYLE FASHION</span>
                                    <span class="info">NEW BAG & STYLE FASHION</span>
                                </div>
                                <span class="btnBefore"></span>
                                <span class="btnAfter"></span>
                                <a class="main-portfolio-link" href="single-project.html"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="load-more">
                <a href="javascript:void(0)" id="load-more"><i class="icon-refresh"></i></a>
            </div>
        </div>
    </div>
    <div class="container margin-top">
        <div class="newsletter">
            <div class="col-md-6">
                <div class="row">
                    <div class="newsletter-left">
                        <div class="newsletter-left-inner">
                            <h1>STAY INFORMED <br> WITH OUR <b>NEWSLETTER</b></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="newsletter-right" style="background: url({{asset('assets')}}/img/newsletter-bg.jpg)">
                        <div class="newsletter-right-inner">
                            <form>
                                <input type="text" name="newsletter" placeholder="ENTER YOUR EMAIL">
                                <input type="submit" value="SUBSCRIBE">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
