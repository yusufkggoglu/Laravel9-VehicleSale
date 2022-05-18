<div class="navigation">
    <span class="pe-7s-close close-menu" id="close-button"></span>
    <div class="search-wrap js-ui-search">
        <input class="js-ui-text" type="text" placeholder="Search Here...">
        <span class="eks js-ui-close"></span>
    </div>
</div>
<nav class="menu">
    <div class="menu-list">
        @php
            $maincategories = \App\Http\Controllers\HomeController::maincategorylist()
        @endphp
        <ul>
            <li class="menu-item-has-children"><a href="#">Car Category</a>
                <ul class="sub-menu ">
                    @foreach($maincategories as $rs)
                        <li>
                            <a href="{{route('categorycars',['id'=>$rs->id ,'slug'=>$rs->title])}}">- {{$rs->title}}</a>
                        </li>
                    @endforeach
                </ul>
            </li>
            <li><a href="{{route('about')}}">About</a></li>
            <li><a href="{{route('contact')}}">Contact</a></li>
            <li><a href="{{route('references')}}">References</a></li>
        </ul>
    </div>
</nav>

<div class="hidden-xs">
    <div class="menu-social-media">
        <ul>
            <li><a href="#"><i class="iconmoon-facebook"></i></a></li>
            <li><a href="#"><i class="iconmoon-twitter"></i></a></li>
            <li><a href="#"><i class="iconmoon-dribbble3"></i></a></li>
            <li><a href="#"><i class="iconmoon-pinterest"></i></a></li>
            <li><a href="#"><i class="iconmoon-linkedin2"></i></a></li>
        </ul>
    </div>

    <div class="menu-information">
        <ul>
            <li><span>T:</span> 003 124 115</li>
            <li><span>E:</span> info@mail.com</li>
        </ul>
    </div>
</div>
</div>
</div>
<!-- End of Menu Hamburger (Default) -->

</div>
</div>
