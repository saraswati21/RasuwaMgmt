@extends('master')
@section('content')
    <div class="container my-3">
        <form class="row" action="addproductcategories" method="post">
            <div>@csrf</div>
            <div class="col-12">
                <label for="inputProductCategoryName" class="form-label">Product Category Name</label>
                <input type="text" class="form-control" id="inputProductCategoryName" name="ProductCategoryName" placeholder="Product Category Name">
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
