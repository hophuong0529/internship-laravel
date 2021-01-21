@extends('layouts.index')
@section('title', 'My Cart')
@section('content')
    @if(session('cart'))
        <?php
        $products = \App\Models\Product::whereIn('id', array_keys(session('cart')))->get();
        ?>
        <br>
        <div style="padding-top: 20px; padding-left: 80px; padding-right: 40px; text-align: center; font-size: 20px;">
            <form method="post" action="{{url('cart/update')}}" id="frm">
                @csrf
                <div class="cart row" style="font-weight: bold; color: #ba1826; padding-bottom: 10px;">
                    <div class="col-md-2">Image</div>
                    <div class="col-md-2">Name</div>
                    <div class="col-md-2">Price</div>
                    <div class="col-md-2">Quantity</div>
                    <div class="col-md-2">Total</div>
                    <div class="col-md-2"></div>
                </div>
                <hr>
                @foreach($products as $product)
                    <div class="cart item row">
                        <div class="col-md-2">
                            <img src="{{ asset('public/'. $product->images[0]->path) }}" alt="" style="width: 100%;">
                        </div>
                        <div class="col-md-2 text-cart">
                            {{ $product->name }}
                        </div>
                        <div class="col-md-2 text-cart">
                            {{ number_format($product->price,0,',','.') }} VNĐ
                        </div>
                        <div class="col-md-2 text-cart">
                            <label>
                                <input class="form-control form-control-sm" min="1" type="number" name="{{ $product->id }}"
                                       value='{{ session("cart.$product->id") }}'>
                            </label>
                        </div>
                        <div
                            class="col-md-2 text-cart">{{ number_format($product->price * session("cart.$product->id"),0,',','.') }} VNĐ</div>
                        <div class="col-md-2 text-cart"><a
                                onclick="return confirm('Are you sure delete it?');"
                                href="{{url('cart/delete/'.$product->id)}}" class="btn btn-danger"
                                style="width: 100px;">Xóa</a>
                        </div>
                    </div>
                    <hr>
                @endforeach

                <?php
                $tongTien = 0;
                foreach ($products as $product)
                    $tongTien = $tongTien + $product->price * session("cart.$product->id");
                session(['total' => $tongTien]);
                ?>

                <div class="cart row" style="font-weight: bold;">
                    <div class="col-md-2"></div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2" style="line-height: 55px;">total bill :</div>
                    <div class="col-md-2"
                         style="color: #ff0000; line-height: 50px; font-size: 25px;">{{ number_format($tongTien,0,',','.') }} ₫
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </form>
            <hr>
            <div style="margin-bottom: 80px;">
                <a onclick="return confirm('Are you sure delete all?');" class="btn btn-danger"
                   href="{{ url('cart/delete-all') }}" style="width: 150px;">Delete All</a>
                &nbsp;
                <input type="submit" value="Update" form="frm" class="btn btn-success" style="width: 150px;">
                &nbsp;
                <a href="{{ url('cart/order') }}" class="btn btn-primary" style="width: 150px;">Order</a></div>
            </div>
    @else
        <div class="clear" style="height: 100px;"></div>
        <span style="font-size: 25px; margin-left: 45%;">Your cart is empty!</span>
        <div class="clear" style="height: 100px;"></div>
    @endif
@endsection
