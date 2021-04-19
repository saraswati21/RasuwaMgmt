@extends('master')
@section('content')
    <div class="container my-3">
        <h1>Edit account</h1>
        <form class="row" action="/editaccount" method="post">
            <div>@csrf</div>
            <input type="hidden" value="{{$data->AccountID}}" name="AccountID">
            <div class="col-12">
                <label for="AccountName" class="form-label">Account Name</label>
                <input type="text" class="form-control" id="AccountName" value="{{$data->AccountName}}" name="AccountName" placeholder="Account Name">
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
                <label for="AccountTypeID" class="form-label">Account Type</label>
                <select name="AccountTypeID" id="AccountTypeID" class="form-control">
                    @foreach($catdata as $item)
                        <option value="{{$item->AccountTypeID}}" {{$item->AccountTypeID == $data->AccountTypeID ? 'selected' :''}}>{{$item->AccountTypeName}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
