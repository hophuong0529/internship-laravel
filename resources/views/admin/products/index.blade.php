@extends('admin.layouts.index')
@section('title', 'List products')
@section('content')
    @if(session()->has('message'))
        <div class="alert alert-success" style="text-align: center; font-weight: bold;">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="row" style="margin: 30px 30px 30px 150px;">
        <div class="col-md-10">
            <h1 style="text-align: center;">List products</h1>
        </div>
        <div class="col-md-2">
            <a href="{{ route('products.create') }}" class="btn btn-success" style="width: 150px; margin-top: 20px;"><i class="fa fa-plus"></i> Add</a>
        </div>
    </div>
    <table class="table table-striped" style="text-align: center;">
        <thead>
        <tr>
            <th style="text-align: center; width: 5%; color: red;">Id</th>
            <th style="text-align: center; width: 5%; color: red;">Code</th>
            <th style="text-align: center; width: 20%; color: red;">Image</th>
            <th style="text-align: center; width: 15%; color: red;">Name</th>
            <th style="text-align: center; width: 15%; color: red;">Price</th>
            <th style="text-align: center; width: 5%; color: red;">Quantity</th>
            <th style="text-align: center; width: 20%; color: red;">Description</th>
            <th style="text-align: center; width: 5%; color: red;">Category</th>
            <th style="text-align: center; width: 10%; color: red;"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->code }}</td>
                <td style="padding: 0.5px!important;">
                    <img width="50%" src="{{ asset('public/'. $product->images[0]->path) }}" alt="">
                </td>
                <td>{{ $product->name }}</td>
                <td>{{ number_format($product->price,0,',','.') }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->category->name }}</td>
                <td style="text-align: right;">
                    <a style="padding-right: 20px; text-decoration: none;" class="fa fa-edit" href="{{ route('products.edit', ['id' => $product->id]) }}"></a>
                    <a onclick="return confirm('Bạn có chắc chắn xóa?')" style="color: red; text-decoration: none; padding-right: 20px;" class="fa fa-close" href="{{ route('products.delete', ['id' => $product->id]) }}"></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
