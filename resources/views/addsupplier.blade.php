@extends('master')
@section('content')
    <div class="container my-3">
        <form class="row" action="addaccount" method="post">
            <div>@csrf</div>
            <div class="col-12">
                <label for="accountName" class="form-label">account Name</label>
                <input type="text" class="form-control" id="accountName" name="accountName" placeholder="account Name">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" name="Address" placeholder="Address">
            </div>
            <div class="col-12">
                <label for="inputTelephone" class="form-label">Telephone </label>
                <input type="text" class="form-control" id="inputTelephone" name="Telephone" placeholder="Telephone">
            </div>
            <div class="col-12">
                <label for="inputremarks" class="form-label">Remarks</label>
                <input type="text" class="form-control" id="inputremarks" name="remarks" placeholder="remarks">
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
