@extends('layouts.index')
@section('title', 'Online Shop Website')
@section('style')
    <link href="{{ asset('public/css/slider-1.css') }}" rel="stylesheet" type="text/css" media="all"/>
    <link href="{{ asset('public/css/owl.carousel.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('public/js/modernizr.custom.28468.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/jquery.cslider.js') }}"></script>
    <script type="text/javascript">
        $(function () {
            $('#da-slider').cslider();
        });
    </script>
    <!-- Owl Carousel Assets -->

    <script src="{{ asset('public/js/owl.carousel.js') }}"></script>
    <script>
        $(document).ready(function () {
            $("#owl-demo").owlCarousel({
                items: 4,
                lazyLoad: true,
                autoPlay: true,
                navigation: true,
                navigationText: ["", ""],
                rewindNav: false,
                scrollPerPage: false,
                pagination: false,
                paginationNumbers: false,
            });
        });
    </script>
    <script type="text/javascript" src="{{ asset('public/js/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/easing.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html, body').animate({"scrollTop": $(this.hash).offset().top}, 1200);
            });
        });
    </script>
@endsection
@section('content')
    <div id="da-slider" class="da-slider" style="background: #999999;">
        <div class="da-slide" style="margin-left: 150px;">
            <h2>Mua hàng online</h2>
            <p>Với những ai bận rộn không có nhiều thời gian để mua sắm, thì đây được coi là ưu điểm lớn nhất của dịch vụ mua hàng trực tuyến.
                Đơn giản, bạn có thể ngồi nhà và chọn món hàng mình yêu thích bằng cách click chuột. </p>
            <a href="{{ url('products/ao-hoodie-webarebears') }}" class="da-link" style="width: 20%;">Mua ngay</a>
            <div class="da-img"><img src="{{ asset('public/images/0001-1.jpg') }}" alt=""/></div>
        </div>
        <div class="da-slide" style="margin-left: 150px;">
            <h2>Quản lý dễ dàng</h2>
            <p>Với những ai bận rộn không có nhiều thời gian để mua sắm, thì đây được coi là ưu điểm lớn nhất của dịch vụ mua hàng trực tuyến.
                Đơn giản, bạn có thể ngồi nhà và chọn món hàng mình yêu thích bằng cách click chuột. </p>
            <a href="{{ url('products/set-bo-ni-cao-co-ywh') }}" class="da-link" style="width: 20%;">Mua ngay</a>
            <div class="da-img"><img src="{{ asset('public/images/0005-1.jpg') }}" alt=""/></div>
        </div>
        <div class="da-slide" style="margin-left: 150px;">
            <h2>Cuộc cách mạng</h2>
            <p>Với những ai bận rộn không có nhiều thời gian để mua sắm, thì đây được coi là ưu điểm lớn nhất của dịch vụ mua hàng trực tuyến.
                Đơn giản, bạn có thể ngồi nhà và chọn món hàng mình yêu thích bằng cách click chuột. </p>
            <a href="{{ url('products/quan-ni-tui-hop-bo-gau') }}" class="da-link" style="width: 20%;">Mua ngay</a>
            <div class="da-img"><img src="{{ asset('public/images/0003-1.jpg') }}" alt=""/></div>
        </div>
        <nav class="da-arrows">
            <span class="da-arrows-prev"></span>
            <span class="da-arrows-next"></span>
        </nav>
    </div>
    <!-- start main1 -->
    <div class="main_bg1">
        <div class="wrap">
            <div class="main1">
                <h2>Sản phẩm mới</h2>
            </div>
        </div>
    </div>
    <!-- start main -->
    <div class="main_bg">
        <div class="wrap">
            <div class="main">
                <!-- start grids_of_3 -->
                <div class="grids_of_3">
                    @foreach ($latest_products as $product)
                        <div class="grid1_of_3">
                            <a href="{{ url('products/'. $slug = Str::slug($product->name, '-')) }}" style="text-decoration:none">
                                <img src="{{ asset('public/'. $product->images[0]->path) }}" alt=""/>
                                <h3>{{ $product->name }}</h3>
                                <div class="price">
                                    <h4>{{ number_format($product->price, 0, ', ', '.') }} VNĐ<span>Chi tiết</span></h4>
                                </div>
                            <span class="b_btm"></span>
                            </a>
                        </div>
                    @endforeach
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="main_bg1">
        <div class="wrap">
            <div class="main1">
                <h2>Sản phẩm bán chạy</h2>
            </div>
        </div>
    </div>
    <!-- start main -->
    <div class="main_bg">
        <div class="wrap">
            <div class="main">
                <a href="{{ url('top-product') }}" style="float: right; font-size: 16px;">>> Xem thêm</a>
                <div class="grids_of_3">
                    @foreach ($top_products as $product)
                        <div class="grid1_of_3">
                            <a href="{{ url('products/'. $slug = Str::slug($product->name, '-')) }}" style="text-decoration:none">
                                <img src="{{ asset('public/'. $product->images[0]->path) }}" alt=""/>
                                <h3>{{ $product->name }}</h3>
                            </a>
                            <div class="price">
                                <h4>{{ number_format($product->price, 0, ', ', '.') }} VNĐ<span>Chi tiết</span></h4>
                            </div>
                            <span class="b_btm"></span>
                        </div>
                    @endforeach
                    <div class="clear"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
