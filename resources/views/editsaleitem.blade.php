@extends('master')
@section('content')
    <div class="container my-3">
        <h1>Edit Sales</h1>
        <form class="row" action="/editsaleitem" method="post">
            <div>@csrf</div>
            <input type="hidden" value="{{$data->SaleID}}" name="SaleID">
            <div class="col-12">
                <label for="inputSales" class="form-label">Sales</label>
                <input type="text" class="form-control" id="SaleQuantity" value="{{$data->SaleID}}" name="SaleQuantity" placeholder="Sale Quantity">
            </div>

            <div class="col-12">
                <label for="inputProducts" class="form-label">Products </label>
                <select class="form-control" id="ProductID" name="ProductID">
                    @foreach($prodata as $item)
                        <option value="{{$item->ProductID}}" {{$item->ProductID == $data->ProductID ? 'selected' :''}}>{{$item->ProductName}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12">
                <label for="inputSaleQuantity" class="form-label">Sale Quantity</label>
                <input type="text" class="form-control" id="SaleQuantity" value="{{$data->SaleQuantity}}" name="SaleQuantity" placeholder="Sale Quantity">
            </div>
            <div class="col-12">
                <label for="inputSaleUnitPrice" class="form-label">Sale Unit Price</label>
                <input type="text" class="form-control" id="SaleUnitPrice" value="{{$data->SaleUnitPrice}}" name="SaleUnitPrice" placeholder="Sale Unit Price">
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
