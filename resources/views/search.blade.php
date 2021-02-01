@extends('layouts.index')
@section('title', 'Search Products')
@section('content')
    <div class="main_bg">
        <div class="wrap">
            <div class="main">
                @if(empty($products))
                    <div class="clear" style="height: 100px;"></div>
                    <span style="font-size: 20px;"><i class="fa fa-align-right"></i> Không thể tìm thấy sản phẩm có từ khóa '<span style="color: red;">{{ $keyword }}</span>'</span>
                    <div class="clear" style="height: 100px;"></div>
                @else
                    <span style="font-size: 20px;"><i class="fa fa-align-right"></i> Kết quả tìm kiếm từ khóa '<span style="color: red;">{{ $keyword }}</span>'</span>
                <!-- start grids_of_3 -->
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
                @endif
            </div>
        </div>
    </div>
@endsection
