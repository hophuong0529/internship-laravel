@extends('layouts.index')
@section('title', $product->name)
@section('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/productviewgallery.css') }}" media="all"/>
    <script type="text/javascript" src="{{ asset('public/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/cloud-zoom.1.0.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/jquery.fancybox.pack.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/jquery.fancybox-buttons.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/jquery.fancybox-thumbs.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/productviewgallery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/move-top.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/js/easing.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1200);
            });
            $(".carousel-inner .item:first").addClass("active");
        });
    </script>
@endsection
@section('content')
    <div class="main_bg">
        <div class="wrap">
            <div class="main">
                <!-- start content -->
                <div class="single">
                    <div class="product-view">
                        <div class="product-essential">
                            <div class="product-img-box" style="float:left; width: 40%;">
                                <div class="more-views">
                                    <div class="more-views-container">
                                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                            <!-- Wrapper for slides -->
                                            <div class="carousel-inner">
                                                @foreach($product_images as $image)
                                                    <div class="item">
                                                        <img src="{{ asset('public/'.$image->path) }}" alt="image"
                                                             style="width:100%;">
                                                    </div>
                                                @endforeach
                                            </div>

                                            <!-- Left and right controls -->
                                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                                <span class="glyphicon glyphicon-chevron-left"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                                <span class="glyphicon glyphicon-chevron-right"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="span1_of_1_des" style="float:left; width: 25%;">
                                <div class="desc1">
                                    <h3>{{ $product->name  }}</h3>
                                    <p>{{ $product->description }}</p>
                                    <h5>{{ number_format($product->price, 0, ', ', '.') }} VNĐ<a href="#">click for
                                            offer</a></h5>
                                    <div class="btn_form">
                                        <a href="{{ url('cart/add/'.$product->id) }}" class="btn btn-danger" style="width: 200px; font-size: 16px;">Add to Cart</a>
                                    </div>
                                    <div class="clear" style="margin-bottom: 60px;"></div>
                                    <div class="share-desc">
                                        <div class="share">
                                            <h4>Share Product :</h4>
                                            <ul class="share_nav">
                                                <li><a href="#"><img src="{{ asset('public/images/facebook.png') }}"
                                                                     title="Facebook" alt=""></a></li>
                                                <li><a href="#"><img src="{{ asset('public/images/twitter.png') }}"
                                                                     title="Twitter" alt=""></a></li>
                                                <li><a href="#"><img src="{{ asset('public/images/rss.png') }}"
                                                                     title="Rss" alt=""></a></li>
                                                <li><a href="#"><img src="{{ asset('public/images/gpluse.png') }}"
                                                                     title="Google+" alt=""></a></li>
                                            </ul>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- end product_slider -->
                            <div class="left_sidebar" style="float:right; width: 25%;">
                                <div class="sellers">
                                    <h4>Best Sellers</h4>
                                    <div class="single-nav">
                                        <ul>
                                            <li><a href="#">Always free from repetition</a></li>
                                            <li><a href="#">Always free from repetition</a></li>
                                            <li><a href="#">The standard chunk of Lorem Ipsum</a></li>
                                            <li><a href="#">The standard chunk of Lorem Ipsum</a></li>
                                            <li><a href="#">The standard chunk of Lorem Ipsum</a></li>
                                        </ul>
                                    </div>
                                    <div class="banner-wrap bottom_banner color_link">
                                        <a href="#" class="main_link">
                                            <figure><img src="{{ asset('images/delivery.png') }}" alt=""></figure>
                                            <h5><span>Free Shipping</span><br> on orders over $99.</h5>
                                            <p>This offer is valid on all our store items.</p></a>
                                    </div>
                                    <div class="brands">
                                        <h1>Brands</h1>
                                        <div class="field">
                                            <label>
                                                <select class="select1">
                                                    <option>Please Select</option>
                                                    <option>Lorem ipsum dolor sit amet</option>
                                                    <option>Lorem ipsum dolor sit amet</option>
                                                    <option>Lorem ipsum dolor sit amet</option>
                                                </select>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- start span1_of_1 -->
                    </div>
                </div>
                <div class="clear"></div>
                <!-- start tabs -->
                <section class="tabs">
                    <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked">
                    <label for="tab-1" class="tab-label-1">overview</label>

                    <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2">
                    <label for="tab-2" class="tab-label-2">consumer electronics</label>

                    <input id="tab-3" type="radio" name="radio-set" class="tab-selector-3">
                    <label for="tab-3" class="tab-label-3">semiconductor</label>

                    <div class="clear-shadow"></div>

                    <div class="content">
                        <div class="content-1">
                            <p class="para top"><span>LOREM IPSUM</span> There are many variations of passages of
                                Lorem
                                Ipsum available, but the majority have suffered alteration in some form, by injected
                                humour, or randomised words which don't look even slightly believable. If you are
                                going
                                to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                                embarrassing
                                hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to
                                repeat predefined chunks as necessary, making this the first true generator on the
                                Internet. It uses a dictionary of over 200 Latin words, combined </p>
                            <ul>
                                <li>Research</li>
                                <li>Design and Development</li>
                                <li>Porting and Optimization</li>
                                <li>System integration</li>
                                <li>Verification, Validation and Testing</li>
                                <li>Maintenance and Support</li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                        <div class="content-2">
                            <p class="para"><span>WELCOME </span> Contrary to popular belief, Lorem Ipsum is not
                                simply
                                random text. It has roots in a piece of classical Latin literature from 45 BC,
                                making it
                                over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College
                                in
                                Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem
                                Ipsum
                                passage, and going through the cites of the word in classical literature, discovered
                                the
                                undoubtable source. Lorem Ipsum comes from sections </p>
                            <ul class="qua_nav">
                                <li>Multimedia Systems</li>
                                <li>Digital media adapters</li>
                                <li>Set top boxes for HDTV and IPTV Player applications on various Operating Systems
                                    and
                                    Hardware Platforms
                                </li>
                            </ul>
                        </div>
                        <div class="content-3">
                            <p class="para top"><span>LOREM IPSUM</span> There are many variations of passages of
                                Lorem
                                Ipsum available, but the majority have suffered alteration in some form, by injected
                                humour, or randomised words which don't look even slightly believable. If you are
                                going
                                to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                                embarrassing
                                hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to
                                repeat predefined chunks as necessary, making this the first true generator on the
                                Internet. It uses a dictionary of over 200 Latin words, combined </p>
                            <ul>
                                <li>Research</li>
                                <li>Design and Development</li>
                                <li>Porting and Optimization</li>
                                <li>System integration</li>
                                <li>Verification, Validation and Testing</li>
                                <li>Maintenance and Support</li>
                            </ul>
                            <div class="clear"></div>
                        </div>
                    </div>
                </section>
                <!-- end tabs -->
            </div>
            <!-- start sidebar -->
            <!-- end sidebar -->
            <div class="clear"></div>
        </div>
        <!-- end content -->
    </div>
    <div class="main_bg1">
        <div class="wrap">
            <div class="main1">
                <h2>related products</h2>
            </div>
        </div>
    </div>
    <div class="main_bg">
        <div class="wrap">
            <div class="main">
                <!-- start grids_of_3 -->
                <div class="grids_of_3">
                    @foreach ($related_products as $product)
                        <div class="grid1_of_3">
                            <a href="{{ url('products/'. $slug = Str::slug($product->name, '-')) }}" style="text-decoration: none;">
                                <img src="{{ asset('public/'. $product->images[0]->path) }}" alt=""/>
                                <h3>{{ $product->name }}</h3>
                                <div class="price">
                                    <h4>{{ number_format($product->price, 0, ', ', '.') }} VNĐ<span>indulge</span></h4>
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
@endsection
