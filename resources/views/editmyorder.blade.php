@extends('master')
@section('content')
    <div class="container my-3">
        <h1>Edit Purchases</h1>
        <form class="row" action="/editmyorder" method="post">
            <div>@csrf</div>
            <div><input type="hidden" value="{{$data->MyOrderID}}" name="MyOrderID"></div>
            <div class="col-12">
                <label for="inputAccounts" class="form-label">Accounts </label>
                <select class="form-control" id="inputAccounts" name="AccountID">
                    @foreach($prodata as $item)
                        <option value="{{$item->AccountID}}" {{$item->AccountID == $data->AccountID ? 'selected' :''}}>{{$item->AccountName}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12">
                <label for="inputOrderStatus" class="form-label">Order Status </label>
                <select class="form-control" id="inputOrderStatus" name="OrderStatusID" disabled>
                    @foreach($status as $item)
                        <option value="{{$item->OrderStatusID}}" {{$item->OrderStatusID == $data->OrderStatusID ? 'selected' :''}}>{{$item->OrderStatusName}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12">
                <label for="inputOrderDate" class="form-label">Order Date</label>
                <input type="text" class="form-control" id="OrderDate" value="{{$data->OrderDate}}" name="OrderDate" placeholder="Order Date" disabled>
            </div>
            <div class="col-12">
                <label for="inputOrderNumber" class="form-label">Order Number</label>
                <input type="text" class="form-control" id="OrderNumber" value="{{$data->OrderNumber}}" name="OrderNumber" placeholder="Order Number" disabled>
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
