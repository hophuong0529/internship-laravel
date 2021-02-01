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
                    <li><a href="{{ url('') }}">Trang chủ</a></li>
                    |
                    <li><a href="#">Tất cả</a></li>
                    |
                    <li><a href="{{ url('sale-product') }}">Sale</a></li>
                    |
                    <li><a href="#">Áo</a></li>
                    |
                    <li><a href="#">Quần</a></li>
                    |
                    <li><a href="#">Set</a></li>
                    |
                    <li><a href="#">Phụ kiện</a></li>
                    @if(session('username'))
                        <li class="dropdown" style="padding-left: 250px;">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Xin chào, {{ session('name') }} <span class="caret"></span></a>
                            <ul class="dropdown-menu" style="margin-left: 350px; text-align: center; z-index: 10000;">
                                <li></li>
                                <li><a href="#">Xem thông tin</a></li><br>
                                <li><a href="{{ url('user/purchase') }}">Lịch sử giao dịch</a></li><br>
                                <li><a href="{{ url('logout') }}">Đăng xuất</a></li><br>
                            </ul>
                        </li>
                    @else
                        |
                        <li><a href="{{ url('login') }}">Đăng nhập</a></li>
                        |
                        <li><a href="{{ url('register') }}">Đăng ký</a></li>
                    @endif
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
