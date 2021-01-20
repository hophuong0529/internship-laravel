<div class="header_bg">
    <div class="wrap">
        <div class="header">
            <div class="logo">
                <a href="{{ url('') }}"><img src="{{ asset('public/images/logo.png') }}" alt=""/> </a>
            </div>
            <div class="h_icon">
                <ul class="icon1 sub-icon1">
                    <li><a class="active-icon c1" href="#"><i>$300</i></a>
                        <ul class="sub-icon1 list">
                            <li><h3>shopping cart empty</h3><a href=""></a></li>
                            <li><p>if items in your wishlit are missing, <a href="#">contact us</a> to view them</p>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="h_search">
                <form method="get" action="{{ url('search') }}">
                    <input type="text" value="" name="keyword">
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
                        <li class="nav-item"><a href="sale.html">Our Shop</a></li>
                        <li class="nav-item"><a href="handbags.html">Our Sale</a></li>
                        <li class="nav-item"><a href="handbags.html">Our Service</a></li>
                        <li class="nav-item"><a href="accessories.html">Blog</a></li>
                        <li class="nav-item"><a href="wallets.html">Contact</a></li>
                        <li class="nav-item"><a href="{{ url('login') }}">Sign In</a></li>
                        <li class="nav-item"><a href="{{ url('register') }}">Sign Up</a></li>
                    </ul>
                </nav>
                <div class="search_box">
                    <form>
                        <input type="text" value="Search" onfocus="this.value = '';"
                               onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
                    </form>
                </div>
                <div class="clear"></div>
                <script src="{{ asset('public/js/responsive.menu.js') }}"></script>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
