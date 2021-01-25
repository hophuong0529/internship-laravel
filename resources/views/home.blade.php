@extends('layouts.index')
@section('title', 'Online Shop Website')
@section('style')
    <link href="{{ asset('public/css/slider.css') }}" rel="stylesheet" type="text/css" media="all"/>
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
            <h2>welcome to aditii</h2>
            <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her
                hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line
                Lane.</p>
            <a href="{{ url('products/ao-hoodie-oversize-webarebears') }}" class="da-link" style="width: 20%;">shop now</a>
            <div class="da-img"><img src="{{ asset('public/images/0001-1.jpg') }}" alt=""/></div>
        </div>
        <div class="da-slide" style="margin-left: 150px;">
            <h2>Easy management</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
                blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language
                ocean.</p>
            <a href="{{ url('products/set-bo-ni-cao-co-oversize-ywh') }}" class="da-link" style="width: 20%;">shop now</a>
            <div class="da-img"><img src="{{ asset('public/images/0005-1.jpg') }}" alt=""/></div>
        </div>
        <div class="da-slide" style="margin-left: 150px;">
            <h2>Revolution</h2>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
                paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
            <a href="{{ url('products/quan-ni-tui-hop-bo-gau') }}" class="da-link" style="width: 20%;">shop now</a>
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
                <h2>latest products</h2>
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
                            <a href="{{ url('products/'. $slug = Str::slug($product->name, '-')) }}">
                                <img src="{{ asset('public/'. $product->images[0]->path) }}" alt=""/>
                                <h3>{{ $product->name }}</h3>
                            </a>
                            <div class="price">
                                <h4>{{ number_format($product->price, 0, ', ', '.') }} VNĐ<span>indulge</span></h4>
                            </div>
                            <span class="b_btm"></span>
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
                <h2>top products</h2>
            </div>
        </div>
    </div>
    <!-- start main -->
    <div class="main_bg">
        <div class="wrap">
            <div class="main">
                <!-- start grids_of_3 -->
                <div class="grids_of_3">
                    @foreach ($top_products as $product)
                        <div class="grid1_of_3">
                            <a href="{{ url('products/'. $slug = Str::slug($product->name, '-')) }}">
                                <img src="{{ asset('public/'. $product->images[0]->path) }}" alt=""/>
                                <h3>{{ $product->name }}</h3>
                            </a>
                            <div class="price">
                                <h4>{{ number_format($product->price, 0, ', ', '.') }} VNĐ<span>indulge</span></h4>
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
