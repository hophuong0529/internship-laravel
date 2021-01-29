@extends('layouts.index')
@section('title', 'Sale Product')
@section('content')
    <div class="main_bg">
        <div class="wrap">
            <div class="main">
                <span style="font-size: 28px;">Sale Product</span>
                <div class="grids_of_3">
                    @foreach ($products as $product)
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
