@extends('layouts.home')

@section('title','Frequently Asked Question | '.$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('icon',Storage::url($setting->icon))

@section('headerjs')
    <style>
        .accordion {
            background-color: #eee;
            color: #444;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
            transition: 0.4s;
        }

        .active, .accordion:hover {
            background-color: #ccc;
        }

        .panel {
            padding: 0 18px;
            display: none;
            background-color: white;
            overflow: hidden;
        }
    </style>
@endsection


@section('content')
    <div class="container" style="">
        <center>
            <h4 style="color:black; "><a href="{{route('index')}}">Home</a>/<a href="{{{route('faq')}}}">Frequently
                    Asked Question</a>
            </h4>
        </center>
    </div>
    <div class="container">
        <h1>Frequently Asked Question</h1>
        <hr style="width: 1200px">
        @foreach($datalist as $rs)
            <button class="accordion">{{$rs->question}}</button>
            <div class="panel">
                <p>{!! $rs->answer !!}</p>
            </div>
        @endforeach
        <script>
            var acc = document.getElementsByClassName("accordion");
            var i;

            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function () {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.display === "block") {
                        panel.style.display = "none";
                    } else {
                        panel.style.display = "block";
                    }
                });
            }
        </script>

    </div>


@endsection
