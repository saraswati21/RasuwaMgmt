@extends('master')
@section('content')
    <div class="container my-3">
        <form class="row" action="addproduct" method="post">
            <div>@csrf</div>
            <div class="col-12">
                <label for="inputProductName" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="inputProductName" name="ProductName" placeholder="Product Name">
            </div>
            <div class="col-12">
                <label for="inputproductCategoryID" class="form-label">Product Category ID</label>
                <input type="text" class="form-control" id="inputproductCategoryID" name="productCategoryID" placeholder="Product Category ID">
            </div>
            <div class="col-12">
                <label for="inputUnit" class="form-label">Unit </label>
                <input type="text" class="form-control" id="inputUnit" name="Unit" placeholder="Unit">
            </div>
            <div class="col-12">
                <label for="inputSellingPrice" class="form-label">Selling Price</label>
                <input type="text" class="form-control" id="inputSellingPrice" name="SellingPrice" placeholder="Selling Price">
            </div>
            <div class="col-12">
                <label for="inputCostPrice" class="form-label">Cost Price</label>
                <input type="text" class="form-control" id="inputCostPrice" name="CostPrice" placeholder="Cost Price">
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
