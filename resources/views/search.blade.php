@extends('layouts.index')
@section('title', 'Search Products')
@section('content')
    <div class="main_bg">
        <div class="wrap">
            <div class="main">
                @if(!empty($products))
                    <span style="font-size: 25px;"><i class="fa fa-align-right"></i> We cannot found the keyword '<span style="color: red;">{{ $keyword }}</span>'</span>
                    <div class="clear" style="height: 200px;"></div>
                @else
                    <span style="font-size: 25px;"><i class="fa fa-align-right"></i> Search results for the keyword '<span style="color: red;">{{ $keyword }}</span>'</span>
                <!-- start grids_of_3 -->
                    <div class="grids_of_3">
                        @foreach ($products as $product)
                            <div class="grid1_of_3">
                                <a href="product/{{ $product->id }}">
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
                @endif
            </div>
        </div>
    </div>
@endsection
