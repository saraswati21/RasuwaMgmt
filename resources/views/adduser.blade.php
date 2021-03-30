@extends('master')
@section('content')
    <div class="container my-3">
        <form class="row" action="adduser" method="post">
            <div>@csrf</div>
            <div class="col-12">
                <label for="UserName" class="form-label">User Name</label>
                <input type="text" class="form-control" id="UserName" name="UserName" placeholder="User Name">
            </div>
            <div class="col-12">
                <label for="Email" class="form-label">Email</label>
                <input type="text" class="form-control" id="Email" name="Email" placeholder="Email">
            </div>
            <div class="col-12">
                <label for="UserRoleID" class="form-label">User Role ID</label>
                <select name="UserRoleID" id="UserRoleID" class="form-control">
                    @foreach($data as $item)
                        <option value="{{$item->UserRoleID}}">{{$item->UserRoleName}}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-12">
                <label for="Password" class="form-label">Password</label>
                <input type="password" class="form-control" id="Password" name="Password" placeholder="Password">
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
