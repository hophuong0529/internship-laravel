@extends('admin.layouts.index')
@section('title', 'List products')
@section('content')
    <div class="row" style="margin: 30px 30px 30px 150px;">
        <div class="col-md-10">
            <h1 style="text-align: center;">List products</h1>
        </div>
        <div class="col-md-2">
            <a href="{{ route('products.create') }}" class="btn btn-success" style="width: 150px;"><i class="fa fa-plus"></i> Add</a>
        </div>
    </div>
    <table class="table table-striped" style="text-align: center;">
        <thead>
        <tr>
            <th width="5%" style="text-align: center; color: red;">Code</th>
            <th width="20%" style="text-align: center; color: red;">Image</th>
            <th width="15%" style="text-align: center; color: red;">Name</th>
            <th width="15%" style="text-align: center; color: red;">Price</th>
            <th width="5%" style="text-align: center; color: red;">Quantity</th>
            <th width="20%" style="text-align: center; color: red;">Description</th>
            <th width="10%" style="text-align: center; color: red;">Category</th>
            <th width="10%" style="text-align: center; color: red;"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->code }}</td>
                <td style="padding: 0.5px!important;">
                    <img width="50%" src="{{ asset('public/'. $product->images[0]->path) }}" alt="">
                </td>
                <td>{{ $product->name }}</td>
                <td>{{ number_format($product->price,0,',','.') }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->category->name }}</td>
                <td style="text-align: initial;">
                    <a style="padding-right: 40px; text-decoration: none;" class="fa fa-edit" href="{{ url('admin/productEdit/'.$product->id) }}"></a>
                    <a onclick="return confirm('Bạn có chắc chắn xóa?')" style="color: red; text-decoration: none;" class="fa fa-close" href="{{url('admin/productDelete/'.$product->id)}}"></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
