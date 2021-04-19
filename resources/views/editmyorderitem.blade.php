@extends('master')
@section('content')
    <div class="container my-3">
        <h1>My Order Item</h1>
        <form class="row" action="/editmyorderitem" method="post">
            <div>@csrf</div>
            <input type="hidden" value="{{$data->OrderItemId}}" name="OrderItemId">

            <div class="col-12">
                <label for="inputMyOrderID" class="form-label">My Order ID</label>
                <input type="text" class="form-control" id="inputMyOrderID" value="{{$data->MyOrderID}}" name="MyOrderID" disabled>
            </div>
            <div class="col-12">
                <label for="inputProducts" class="form-label">Products </label>
                <select class="form-control" id="inputProducts" name="ProductID">
                    @foreach($prodata as $item)
                        <option value="{{$item->ProductID}}" {{$item->ProductID == $data->ProductID ? 'selected' :''}}>{{$item->ProductName}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12">
                <label for="OrderedQuantity" class="form-label">Ordered Quantity</label>
                <input type="text" class="form-control" id="OrderedQuantity" value="{{$data->OrderedQuantity}}" name="OrderedQuantity" placeholder="Ordered Quantity">
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
