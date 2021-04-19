@extends('master')
@section('content')
    <div class="container my-3">
        <form class="row" action="addaccount" method="post">
               <div>@csrf</div>
            <div class="col-12">
                <label for="AccountName" class="form-label">Account Name</label>
                <input type="text" class="form-control" id="AccountName" name="AccountName" placeholder="Account Name">
            </div>
            <div class="col-12">
                <label for="inputTelephone" class="form-label">Telephone </label>
                <input type="text" class="form-control" id="inputTelephone" name="Telephone" placeholder="Telephone">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" name="Address" placeholder="Address">
            </div>
            <div class="col-12">
                <label for="inputRemarks" class="form-label">Remarks</label>
                <input type="text" class="form-control" id="inputRemarks" name="Remarks" placeholder="Remarks">
            </div>
            <div class="col-12">
                <label for="AccountTypeID" class="form-label">Account Type</label>
                <select name="AccountTypeID" id="AccountTypeID" class="form-control">
                    @foreach($data as $item)S
                        <option value="{{$item->AccountTypeID}}">{{$item->AccountTypeName}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
