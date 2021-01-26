@extends('admin.layouts.index')
@section('title', 'Edit product')
@section('style')
    <style>
        .gallery img {
            width: 30%;
            padding-right: 20px;
            padding-bottom: 10px;
        }
    </style>
@endsection
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
                <h1 style="text-align: center; padding: 20px 0 50px 0;"> Edit Product</h1>
                <form method="post" action="{{ route('products.update', ['id' => $product->id]) }}" enctype="multipart/form-data"
                      class="form-horizontal style-form">
                    @csrf
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <td style="font-weight: bold; width: 30%;">Category</td>
                            <td>
                                <label>
                                    <select name="category_id" class="form-control">
                                        <option value="{{ $product->category->id }}" selected>{{ $product->category->name }}</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </label>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Product Code</td>
                            <td><label>
                                    <input name="code" type="text" class="form-control" value="{{ $product->code }}">
                                </label></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Product Name</td>
                            <td><label style="width: 80%;">
                                    <input name="name" type="text" class="form-control" value="{{ $product->name }}">
                                </label></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Product Images</td>
                            <td>
                                <div class="gallery">
                                    <div class="product-image">
                                        @foreach($product->images as $image)
                                            <img src="{{ asset('public/'. $image->path) }}" alt="" style="width: 30%;"/>
                                        @endforeach
                                    </div>
                                </div>
                                <input type="file" class="form-control" name="image[]" id="gallery-photo-add"
                                       accept="image/gif, image/jpeg, image/png" multiple/>
                                <script>
                                    $(function () {
                                        const imagesPreview = function (input, placeToInsertImagePreview) {
                                            if (input.files) {
                                                const filesAmount = input.files.length;

                                                for (let i = 0; i < filesAmount; i++) {
                                                    const reader = new FileReader();

                                                    reader.onload = function (event) {
                                                        $($.parseHTML('<img alt="" src=""/>')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                                                    }
                                                    reader.readAsDataURL(input.files[i]);
                                                }
                                            }
                                        };

                                        $('#gallery-photo-add').on('change', function () {
                                            $('.product-image').css('display', 'none');
                                            imagesPreview(this, 'div.gallery');
                                        });
                                    });
                                </script>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Product Price</td>
                            <td><label>
                                    <input name="price" type="text" class="form-control" value="{{ $product->price }}">
                                </label></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Quantity</td>
                            <td><label>
                                    <input name="quantity" type="text" min="1" class="form-control"
                                               value="{{ $product->quantity }}">
                                </label></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Description</td>
                            <td><label style="width: 100%;"><textarea rows="15" name="description" type="text" class="form-control">{{ $product->description }}</textarea>
                                </label></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <div class="form-check">
                                    <label>
                                        <input class="form-check-input" type="checkbox" name="is_top" value="1" {{ ($product->is_top == '1' ? 'checked' : '') }}/>
                                    </label>
                                    <label class="form-check-label" style="font-weight: bold;">
                                        This is a Top product
                                    </label>
                                    &emsp;
                                    <label>
                                        <input class="form-check-input" type="checkbox" name="on_sale" value="1" {{ ($product->is_top == '1' ? 'checked' : '') }}/>
                                    </label>
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
