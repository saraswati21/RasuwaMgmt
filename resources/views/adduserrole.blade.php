@extends('master')
@section('content')
    <div class="container my-3">
        <form class="row" action="adduserrole" method="post">
            <div>@csrf</div>
            <div class="col-12">
                <label for="UserRoleName" class="form-label">User Role Name</label>
                <input type="text" class="form-control" id="UserRoleName" name="UserRoleName" placeholder="User Role Name">
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
