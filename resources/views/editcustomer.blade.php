@extends('master')
@section('content')
    <div class="container my-3">
        <h1>Edit Customer</h1>
        <form class="row" action="/editcustomer" method="post">
            <div>@csrf</div>
            <input type="hidden" value="{{$data->CustomerID}}" name="CustomerID">
            <div class="col-12">
                <label for="CustomerName" class="form-label">Customer Name</label>
                <input type="text" class="form-control" id="CustomerName" value="{{$data->CustomerName}}" name="CustomerName" placeholder="Customer Name">
            </div>
            <div class="col-12">
                <label for="inputTelephone" class="form-label">Telephone </label>
                <input type="text" class="form-control" id="inputTelephone" value="{{$data->Telephone}}" name="Telephone" placeholder="Telephone">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" value="{{$data->Address}}" name="Address" placeholder="Address">
            </div>
            <div class="col-12">
                <label for="inputRemarks" class="form-label">Remarks</label>
                <input type="text" class="form-control" id="inputRemarks"  value="{{$data->remarks}}" name="Remarks" placeholder="Remarks">
            </div>
            <div class="col-12">
                <label for="CustomerTypeID" class="form-label">Customer Type ID</label>
                <input type="text" class="form-control" id="CustomerTypeID" value="{{$data->CustomerTypeID}}" name="CustomerTypeID" placeholder="Customer Type ID">
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
