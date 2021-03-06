@extends('admin.layouts.index')
@section('title', 'Create a products')
@section('style')
<style>
    .gallery img {
        width: 30%;
        padding-right: 20px;
        padding-bottom: 15px;
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
                <h1 style="text-align: center; padding: 20px 0 50px 0;"> Create a Product</h1>
                <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data" class="form-horizontal style-form">
                    @csrf
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <td style="font-weight: bold; width: 25%;">Category</td>
                            <td>
                                <label>
                                    <select name="category_id" class="form-control">
                                        <option selected>Choose an option</option>
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
                                    <input name="code" type="text" class="form-control">
                                </label></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Product Name</td>
                            <td><label style="width: 80%;">
                                    <input name="name" type="text" class="form-control">
                                </label></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Product Images</td>
                            <td>
                                <div class="gallery"></div>
                                <input type="file" class="form-control" id="gallery-photo-add" name="image[]" accept="image/gif, image/jpeg, image/png" multiple/>
                            </td>
                        </tr>
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
                                    imagesPreview(this, 'div.gallery');
                                });
                            });
                        </script>
                        <tr>
                            <td style="font-weight: bold;">Product Price</td>
                            <td><label>
                                    <input name="price" type="text" class="form-control">
                                </label></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Quantity</td>
                            <td><label>
                                    <input name="quantity" type="text" min="1" class="form-control">
                                </label></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Description</td>
                            <td><label style="width: 100%;">
                                    <textarea rows="15" name="description" type="text" class="form-control"></textarea>
                                </label></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <div class="form-check">
                                    <label>
                                        <input class="form-check-input" type="checkbox" name="is_top" value="1">
                                    </label>
                                    <label class="form-check-label" style="font-weight: bold;">
                                        This is a Top product
                                    </label>
                                    &emsp;
                                    <label>
                                        <input class="form-check-input" type="checkbox" name="on_sale" value="1">
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
