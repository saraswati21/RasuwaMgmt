@extends('master')
@section('content')
    <div class="container my-3">
        <form class="row" action="addcustomertype" method="post">
            <div>@csrf</div>
            <div class="col-12">
                <label for="CustomerTypeName" class="form-label">Customer Type Name</label>
                <input type="text" class="form-control" id="CustomerTypeName" name="CustomerTypeName" placeholder="Customer Type Name">
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
