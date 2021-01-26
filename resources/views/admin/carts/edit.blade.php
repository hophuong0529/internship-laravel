@extends('admin.layouts.index')
@section('title', 'Edit cart')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row mt">
        <div class="col-lg-12">
            <div class="form-panel">
                <h1 style="text-align: center; padding: 20px 0 50px 0;"> Edit Cart</h1>
                <form method="post" action="{{ route('carts.update', ['id' => $cart->id]) }}"
                      enctype="multipart/form-data"
                      class="form-horizontal style-form">
                    @csrf
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <td style="font-weight: bold; width: 30%;">User</td>
                            <td>
                                <label>
                                    <select name="user_id" class="form-control">
                                        <option value="{{ $cart->user->id }}" selected>{{ $cart->user->name }}
                                            - {{ $cart->user->email }}</option>
                                        @foreach($users as $user)
                                            <option value="{{ $user->id }}">{{ $user->name }}
                                                - {{ $user->email }}</option>
                                        @endforeach
                                    </select>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold; width: 30%;">Product</td>
                            <td>
                                <img width="15%" style="padding-bottom: 10px;" src="{{ asset('public/'. $cart->product->images[0]->path) }}" alt=""/> <br>
                                <label>
                                    <select name="product_id" class="form-control">
                                        <option value="{{ $cart->product->id }}" selected>{{ $cart->product->code }}
                                            - {{ $cart->product->name }}</option>
                                        @foreach($products as $product)
                                            <option value="{{ $product->id }}">{{ $product->code }}
                                                - {{ $product->name }}</option>
                                        @endforeach
                                    </select>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Quantity</td>
                            <td><label>
                                    <input name="quantity" type="text" min="1" max= {{ $cart->product->quantity }} class="form-control"
                                           value="{{ $cart->quantity }}">
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Status</td>
                            <td>
                                <div class="form-check">
                                    <label>
                                        <input class="form-check-input" type="radio" name="status"
                                               value="1" {{ ($cart->status == '1' ? 'checked' : '') }}/>
                                    </label>
                                    <label class="form-check-label" style="font-weight: bold;">
                                        Processed
                                    </label>
                                    &emsp;
                                    <label>
                                        <input class="form-check-input" type="radio" name="status"
                                               value="0" {{ ($cart->status == '0' ? 'checked' : '') }}/>
                                    </label>
                                    <label class="form-check-label" style="font-weight: bold;">
                                        Unprocessed
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" class="btn btn-success" style="width: 200px;" value="Save">&nbsp;
                                <a href="{{ route('carts.index') }}" style="width: 200px;"
                                   class="btn btn-danger">Back</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
@endsection
