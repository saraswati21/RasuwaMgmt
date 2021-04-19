  @extends('master')
@section('content')
    <div class="container my-3">
        <h1>Edit Product</h1>
        <form class="row" action="/editproduct" method="post">
            <div>@csrf</div>
            <input type="hidden" value="{{$data->ProductID}}" name="ProductID">
            <div class="col-12">
                <label for="ProductName" class="form-label">Product Name</label>
                <input type="text" class="form-control" id="ProductName" value="{{$data->ProductName}}" name="ProductName" placeholder="Product Name">
            </div>

            <div class="col-12">
                <label for="productCategoryID" class="form-label">Product Categories</label>
                <select name="productCategoryID" id="productCategoryID" class="form-control">
                    @foreach($catdata as $item)
                        <option value="{{$item->productCategoryID}}" {{$item->productCategoryID == $data->productCategoryID ? 'selected' :''}}>{{$item->productCategoryName}}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-12">
                <label for="inputUnit" class="form-label">Unit </label>
                <input type="text" class="form-control" id="inputUnit" value="{{$data->Unit}}" name="Unit" placeholder="Unit">
            </div>
            <div class="col-12">
                <label for="inputSellingPrice" class="form-label">Selling Price</label>
                <input type="text" class="form-control" id="inputSellingPrice" value="{{$data->SellingPrice}}" name="SellingPrice" placeholder="Selling Price">
            </div>
            <div class="col-12">
                <label for="inputCostPrice" class="form-label">Cost Price</label>
                <input type="text" class="form-control" id="inputCostPrice"  value="{{$data->CostPrice}}" name="CostPrice" placeholder="Cost Price">

            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
