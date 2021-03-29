@extends('master')
@section('content')
    <div class="container my-3">
        <h1>Edit Supplier</h1>
        <form class="row" action="/editsupplier" method="post">
            <div>@csrf</div>
            <input type="hidden" value="{{$data->SupplierID}}" name="SupplierID">
            <div class="col-12">
                <label for="SupplierName" class="form-label">Supplier Name</label>
                <input type="text" class="form-control" id="SupplierName" value="{{$data->SupplierName}}" name="SupplierName" placeholder="Supplier Name">
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
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
