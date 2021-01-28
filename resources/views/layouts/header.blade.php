<div class="header_bg">
    <div class="wrap">
        <div class="header">
            <div class="logo">
                <a href="{{ url('') }}"><img src="{{ asset('public/images/logo.png') }}" alt=""/> </a>
            </div>
            <div class="h_icon" style="width: 12%">
                <ul class="icon1 sub-icon1">
                    <li>
                        <a class="active-icon c1" href="{{ url('cart') }}"><i>{{ number_format(session('total'),0,',','.') }}</i></a>
                    </li>
                </ul>
            </div>
            <div class="h_search">
                <form method="get" action="{{ url('search') }}">
                    <label>
                        <input type="text" value="" name="keyword">
                    </label>
                    <input type="submit" value="">
                </form>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
<div class="header_btm">
    <div class="wrap">
        <div class="header_sub">
            <div class="h_menu">
                <ul>
                    <li><a href="{{ url('') }}">home</a></li>
                    |
                    <li><a href="#">our shop</a></li>
                    |
                    <li><a href="#">our sale</a></li>
                    |
                    <li><a href="#">our service</a></li>
                    |
                    <li><a href="#">blog</a></li>
                    |
                    <li><a href="#">contact</a></li>
                    |
                    <li><a href="{{ url('login') }}">sign in</a></li>
                    |
                    <li><a href="{{ url('register') }}">sign up</a></li>
                    |
                </ul>
            </div>
            <div class="top-nav">
                <nav class="nav">
                    <a href="#" id="w3-menu-trigger"> </a>
                    <ul class="nav-list" style="">
                        <li class="nav-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="nav-item"><a href="#">Our Shop</a></li>
                        <li class="nav-item"><a href="#">Our Sale</a></li>
                        <li class="nav-item"><a href="#">Our Service</a></li>
                        <li class="nav-item"><a href="#">Blog</a></li>
                        <li class="nav-item"><a href="#">Contact</a></li>
                        <li class="nav-item"><a href="{{ url('login') }}">Sign In</a></li>
                        <li class="nav-item"><a href="{{ url('register') }}">Sign Up</a></li>
                    </ul>
                </nav>
                <div class="clear"></div>
                <script src="{{ asset('public/js/responsive.menu.js') }}"></script>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
