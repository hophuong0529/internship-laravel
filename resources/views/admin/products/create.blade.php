@extends('admin.layouts.index')
@section('title', 'Create a products')
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
                <h1 style="text-align: center; padding: 20px 0px 50px 0px;"> Create a Product</h1>
                <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data" class="form-horizontal style-form">
                    @csrf
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <td style="font-weight: bold;" width="25%">Category</td>
                            <td>
                                <select name="category_id" class="form-control">
                                    <option selected>Choose an option</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Product Code</td>
                            <td><input name="code" type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Product Name</td>
                            <td><input name="name" type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Product Images</td>
                            <td>
                                <input type="file" class="form-control" name="image[]" multiple />
                            </td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Product Price</td>
                            <td><input name="price" type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Quantity</td>
                            <td><input name="quantity" type="text" min="1" class="form-control"></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Description</td>
                            <td><textarea rows="15" name="description" type="text" class="form-control"></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="is_top" value="1">
                                    <label class="form-check-label" style="font-weight: bold;">
                                        This is a Top product
                                    </label>
                                    &emsp;
                                    <input class="form-check-input" type="checkbox" name="on_sale" value="1">
                                    <label class="form-check-label" style="font-weight: bold;">
                                        This is a Sale product
                                    </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" class="btn btn-success" style="width: 200px;" value="Save">&nbsp;
                                <a href="{{ route('products.index') }}" style="width: 200px;" class="btn btn-danger">Back</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
@endsection
