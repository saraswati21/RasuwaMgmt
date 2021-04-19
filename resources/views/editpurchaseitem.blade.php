@extends('master')
@section('content')
    <div class="container my-3">
        <h1>Edit Purchases Item</h1>
        <form class="row" action="/editpurchaseitem" method="post">
            <div>@csrf</div>
            <div><input type="hidden" value="{{$data->purchaseItemId}}" name="purchaseItemId"></div>
            <div class="col-12">
                <label for="inputpurchaseID" class="form-label">Purchase ID</label>
                <input type="text" class="form-control" id="purchaseID" value="{{$data->purchaseID}}" name="purchaseID" placeholder="InvoiceNumber">
            </div>
            <div class="col-12">
                <label for="inputaccounts" class="form-label">Products </label>
                <select class="form-control" id="inputProducts" name="ProductID">
                    @foreach($prodata as $item)
                        <option value="{{$item->ProductID}}" {{$item->ProductID == $data->ProductID ? 'selected' :''}}>{{$item->ProductName}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12">
                <label for="purchaseQuantity" class="form-label">Quantity</label>
                <input type="number" class="form-control" id="purchaseQuantity" value="{{$data->purchaseQuantity}}" name="purchaseQuantity" placeholder="purchaseQuantity">
            </div>
            <div class="col-12">
                <label for="purchaseUnitPrice" class="form-label">Unit Price</label>
                <input type="text" class="form-control" id="purchaseUnitPrice" value="{{$data->purchaseUnitPrice}}" name="purchaseUnitPrice" placeholder="purchaseUnitPrice">
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
