@extends('master')
@section('content')
    <div class="container my-3">
        <form class="row" action="addsaleitem" method="post">
            <div>@csrf</div>
            <div class="col-12">
                <label for="SaleID" class="form-label">Sales Number</label>
                <input type="text" class="form-control" id="SaleID" name="SaleID">
            </div>
            <div class="col-12">
                <label for="inputProducts" class="form-label">Products </label>
                <select  class="form-control" id="ProductID" name="ProductID">
                    @foreach($data as $item)
                        <option value="{{$item->ProductID}}">{{$item->ProductName}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12">
                <label for="inputSaleQuantity" class="form-label">Sale Quantity</label>
                <input type="text" class="form-control" id="SaleQuantity" name="SaleQuantity" placeholder="Sale Quantity">
            </div>
            <div class="col-12">
                <label for="inputSaleUnitPrice" class="form-label">Sale Unit Price</label>
                <input type="text" class="form-control" id="SaleUnitPrice" name="SaleUnitPrice" placeholder="Sale Unit Price">
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
