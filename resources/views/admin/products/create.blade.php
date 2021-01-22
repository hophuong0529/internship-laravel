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
    <h3><i class="fa fa-angle-right"></i> Create a Product</h3>
    <div class="row mt">
        <div class="col-lg-12">
            <div class="form-panel">
                <form method="post" action="{{ route('products.store') }}" enctype="multipart/form-data">
                    @csrf
                    <table class="table table-boredred">
                        <tbody>
                        <tr>
                            <td style="font-weight: bold;">Image Upload</td>
                            <td>
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image" alt=""/>
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail"
                                         style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                        <span class="btn btn-theme02 btn-file">
                                            <span class="fileupload-new"><i class="fa fa-paperclip"></i> Select image</span>
                                            <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                <input type="file" class="default" />
                                            </span>
                                        <a href="advanced_form_components.html#"
                                           class="btn btn-theme04 fileupload-exists" data-dismiss="fileupload"><i
                                                class="fa fa-trash-o"></i> Remove</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;" width="25%">Category</td>
                            <td>
                                <select name="brandId" class="form-control">
                                    <option selected>Choose</option>
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
                            <td style="font-weight: bold;">Product Price</td>
                            <td><input name="price" type="text" class="form-control"></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Quantity</td>
                            <td><input name="quantity" type="text" min="1" class="form-control"></td>
                        </tr>
                        <tr>
                            <td style="font-weight: bold;">Description</td>
                            <td><textarea rows="15" name="price" type="text" class="form-control"></textarea></td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" name="top-product">
                                    <label class="form-check-label" for="defaultCheck1"
                                           style="font-weight: bold; line-height: 20px;">
                                        This is a Top product
                                    </label>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" class="btn btn-success" value="Thêm sản phẩm">
                            &nbsp;
                            <a href="{{url('admin/products')}}" class="btn btn-danger">Quay lại</a>
                        </td>
                    </tr>
                </form>
            </div>
        </div>
    </div>
@endsection
