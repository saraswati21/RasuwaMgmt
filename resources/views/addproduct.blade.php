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
                <label for="inputproductCategoryName" class="form-label">Product Categories</label>
                <select name="productCategoryID" id="productCategoryName" class="form-control">
                    @foreach($data as $item)
                        <option value="{{$item->productCategoryID}}">{{$item->productCategoryName}}</option>
                    @endforeach
                </select>
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
