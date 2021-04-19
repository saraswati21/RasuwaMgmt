@extends('master')
@section('content')
    <div class="container my-3">
        <form class="row" action="addpurchaseitem" method="post">
            <div>@csrf</div>

            <div class="col-12">
                <label for="inputPurchaseID" class="form-label">Purchase ID</label>
                <input type="text" class="form-control" id="inputPurchaseID" name="purchaseID" placeholder="PurchaseID">
            </div>

            <div class="col-12">
                <label for="inputProducts" class="form-label">Products</label>
                <select  class="form-control" id="Products" name="ProductID">
                    @foreach($data as $item)
                        <option value="{{$item->ProductID}}">{{$item->ProductName}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12">
                <label for="inputPurchaseQuantity" class="form-label">Quantity</label>
                <input type="text" class="form-control" id="inputPurchaseQuantity" name="purchaseQuantity" placeholder="Quantity">
            </div>
            <div class="col-12">
                <label for="inputPrice" class="form-label">Price</label>
                <input type="text" class="form-control" id="inputPrice" name="purchaseUnitPrice" placeholder="Price">
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
