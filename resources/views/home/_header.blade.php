@section('headerjs')
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
@endsection
<div class="header">
    <div class="container">
        <div class="logo">
            <a href="{{route('index')}}">
                <img src="{{asset('assets')}}/img/logo.png" alt="Logo">
            </a>
        </div>
        <div class="header-content">

        </div>
        <!-- Menu Hamburger (Default) -->
    <!--<img src="{{asset('assets')}}/img/user.jpg" href=""> -->
        <button class="main-menu-indicator" id="open-button">
            <span class="line"></span>
        </button>
    </div>
</div>
