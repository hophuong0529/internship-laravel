@extends('admin.layouts.index')
@section('title', 'List carts')
@section('content')
    @if(session()->has('message'))
        <div class="alert alert-success" style="text-align: center; font-weight: bold;">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="row" style="margin: 30px 30px 30px 150px;">
        <div class="col-md-10">
            <h1 style="text-align: center;">List carts</h1>
        </div>
    </div>
    <table class="table table-striped" style="text-align: center;">
        <thead>
        <tr>
            <th style="text-align: center; width: 10%; color: red;">Id</th>
            <th style="text-align: center; width: 25%; color: red;">User Infomation</th>
            <th style="text-align: center; width: 45%; color: red;">Product Infomation</th>
            <th style="text-align: center; width: 10%; color: red;">Status</th>
            <th style="text-align: center; width: 10%; color: red;"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($carts as $cart)
            <tr>
                <td>{{ $cart->id }}</td>
                <td>
                    Name: {{ $cart->user->name }} <br>
                    Email: {{ $cart->user->email }}
                </td>
                <td>
                    <img width="30%" style="padding-bottom: 10px;" src="{{ asset('public/'. $cart->product->images[0]->path) }}" alt=""/> <br>
                    Code: {{ $cart->product->code }} <br>
                    Name: {{ $cart->product->name }} <br>
                    Quantity: {{ $cart->quantity }}
                </td>
                <td>
                    {{ ($cart->status == '0' ? 'Unprocessed' : 'Processed') }}
                </td>
                <td style="text-align: initial;">
                    <a style="padding-right: 40px; text-decoration: none;" class="fa fa-edit" href="{{ route('carts.edit', ['id' => $cart->id]) }}"></a>
                    <a onclick="return confirm('Are you sure delete it?')" style="color: red; text-decoration: none;" class="fa fa-close" href="{{ route('carts.delete', ['id' => $cart->id]) }}"></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
