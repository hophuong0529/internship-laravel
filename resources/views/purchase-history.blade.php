@extends('layouts.index')
@section('title', 'Purchase history')
@section('content')
    <h1 style="font-size: 24px; padding: 20px 0px 20px 0px !important; font-weight: bold; color: #3CC395; text-align: center;"></i>
        Lịch sử giao dịch</h1>
    <div style="padding: 10px 200px 10px 200px;">
        @foreach($orders as $order)
            <h3 style="text-align: center; background-color: #89e2ed; padding: 10px;">Đơn hàng: Mã {{ $order->id }}</h3>
            <div style="background-color: aliceblue; margin-bottom: 50px; padding: 20px;">
                <?php $tongTien = 0 ?>
                @foreach($order->details as $detail)
                    <div class="row">
                        <div class="col-md-3">
                            <img src="{{ asset('public/'. $detail->product->images[0]->path) }}" alt=""
                                 style="width: 50%;">
                        </div>
                        <div class="col-md-7" style="padding-left: 120px; padding-top: 30px;">{{ $detail->product->name }} <br>
                            <small style="font-size: 14px;">x {{ $detail->quantity }}</small>
                        </div>
                        <?php
                        $tongTien = $tongTien + $detail->product->price * $detail->quantity;
                        ?>
                        <div class="col-md-2" style="float: right; padding-top: 30px; padding-left: 90px;">
                            ₫{{ number_format($detail->product->price,0,',','.') }}</div>
                    </div>
                @endforeach
                <div class="row">
                    <div class="col-md-6" style="font-weight: bold;">
                        Tình trạng đơn hàng: {{ $order->status_order->name }}
                    </div>
                    <div class="col-md-6">
                        <h3 style="float:right; font-size: 20px; color: red; font-weight: bold;">Tổng số tiền:
                            ₫{{ number_format($tongTien,0,',','.') }}</h3>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="clear"></div>
@endsection
