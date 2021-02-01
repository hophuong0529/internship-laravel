@extends('layouts.index')
@section('title', 'Order Buy')
@section('content')
    @if(session('cart'))
        <?php
        $products = \App\Models\Product::whereIn('id', array_keys(session('cart')))->get();
        ?>
        <div class="orders" style="padding-left: 150px; padding-right: 150px;">
            <br>
            <h1 style="font-size: 24px; padding: 20px 0px 20px 0px !important; font-weight: bold; color: #3CC395; text-align: center;"></i> Thông tin đơn hàng</h1>
            <br>
            <div class="order-part">
                <h3 style="font-weight: bold;">1. Thông tin khách hàng : </h3>
                <div class="col-md-9" style="padding-left: 25%;">
                    <form method="post" action="{{ url('updateInfo') }}">
                        @csrf
                        <div class="form-group">
                            <label>Tên khách hàng: </label>
                            <input type="text" name="name" class="form-control" value="{{ $account->name }}">
                        </div>

                        <div class="form-group">
                            <label>Điện thoại:</label>
                            <input type="tel" name="mobile" class="form-control" value="{{ $account->mobile }}">
                        </div>

                        <div class="form-group">
                            <label>Địa chỉ:</label>
                            <textarea class="form-control" name="address">{{$account->address}}</textarea>
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Cập nhật thông tin">
                        </div>
                    </form>
                </div>
                <div class="clear"></div>
            </div>
            <div class="order-part" style="padding-right: 250px;">
                <h3 style="font-weight: bold;">2. Đơn hàng :</h3>
                <table class="table table-bordered" style="margin-left: 15%; background-color: white">
                    <thead>
                    <tr>
                        <th class="product-name" style="width: 50%;">Sản phẩm</th>
                        <th class="product-total">Thành tiền</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)
                        <tr class="cart_item">
                            <td class="product-name">
                                {{ $product->name }} <strong
                                    class="product-quantity">&times;&nbsp;{{ session("cart.$product->id") }}</strong>
                            </td>
                            <td class="product-total">
                                {{ number_format($product->price*session("cart.$product->id"),0,',','.') }} VNĐ
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    <tr class="cart-subtotal">
                        <th>Tổng tiền hàng</th>
                        <td><span>{{ number_format(session('total'),0,',','.') }} VNĐ</span></td>
                    </tr>
                    <tr class="shipping">
                        <th>Phí ship</th>
                        <td><span>Miễn phí</span></td>
                    </tr>
                    <tr class="order-total">
                        <th>Tổng thanh toán</th>
                        <td><strong><span>{{ number_format(session('total'),0,',','.') }} VNĐ</span></strong></td>
                    </tr>
                    </tfoot>
                </table>
            </div>
            <form method="post">
                @csrf
                <div class="order-part" style="padding-top: 20px;">
                    <h3 style="font-weight: bold;">3. Phương thức thanh toán :</h3>

                    <div style="padding-right: 150px; padding-left: 250px;">
                        @foreach($methods as $method)
                            <div>
                                &emsp;<input type="radio" name="method_id"
                                             value="{{ $method->id }}"> {{ $method->name }}
                            </div>
                        @endforeach
                        <br>
                    </div>
                </div>

                <div class="form-group" style="padding-top: 10px; text-align: center;">
                    <input type="submit" value="Đặt hàng" class="btn btn-success" style="width: 300px;">
                </div>
            </form>
    @endif
@endsection
