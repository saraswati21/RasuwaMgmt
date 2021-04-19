@extends('master')
@section('content')
    <div class="container my-3">
        <form class="row" action="/addcustomerorderitem" method="post">
            <div>@csrf</div>
            <div class="col-12">
                <label for="inputCustomerOrderID" class="form-label">Customer Order ID</label>
                <input type="text" class="form-control" id="inputCustomerOrderID" name="CustomerOrderID" placeholder="Customer Order ID">
            </div>
            <div class="col-12">
                <label for="inputProducts" class="form-label">Products</label>
                <select  class="form-control" id="ProductID" name="ProductID">
                    @foreach($data as $item)
                        <option value="{{$item->ProductID}}">{{$item->ProductName}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12">
                <label for="inputOrderedQuantity" class="form-label">Ordered Quantity</label>
                <input type="text" class="form-control" id="inputOrderedQuantity" name="OrderedQuantity" placeholder="Ordered Quantity">
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
