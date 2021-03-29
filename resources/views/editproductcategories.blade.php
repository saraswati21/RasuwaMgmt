@extends('master')
@section('content')
    <div class="container my-3">
        <h1>Edit Product Category</h1>
        <form class="row" action="/editproductcategories" method="post">
            <div>@csrf</div>
            <input type="hidden" value="{{$data->productCategoryID}}" name="productCategoryID">
            <div class="col-12">
                <label for="ProductCategoryName" class="form-label">Product Category Name</label>
                <input type="text" class="form-control" id="ProductCategoryName" value="{{$data->productCategoryName}}" name="productCategoryName" placeholder="Product Category Name">
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
