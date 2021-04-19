@extends('master')
@section('content')
    <div class="container my-3">
        <h1>Edit account Type</h1>
        <form class="row" action="/editaccounttype" method="post">
            <div>@csrf</div>
            <input type="hidden" value="{{$data->AccountTypeID}}" name="AccountTypeID">
            <div class="col-12">
                <label for="AccountTypeName" class="form-label">Account Type Name</label>
                <input type="text" class="form-control" id="AccountTypeName" value="{{$data->AccountTypeName}}" name="AccountTypeName" placeholder="Account Type Name">
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
