@extends('layouts.index')
@section('title', 'Sale Product')
@section('content')
    <div class="main_bg">
        <div class="wrap">
            <div class="main">
                <h1 style="font-size: 24px; padding-top: 20px; font-weight: bold; color: #3CC395; text-align: center;"></i> Sản phẩm giảm giá</h1>
                <div class="grids_of_3">
                    @foreach ($products as $product)
                        <div class="grid1_of_3">
                            <a href="{{ url('products/'. $slug = Str::slug($product->name, '-')) }}">
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
@endsection
