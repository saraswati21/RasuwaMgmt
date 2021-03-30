@extends('master')
@section('content')
    <div class="container my-3">
        <h1>Edit User</h1>
        <form class="row" action="/edituser" method="post">
            <div>@csrf</div>
            <input type="hidden" value="{{$data->UserID}}" name="UserID">
            <div class="col-12">
                <label for="UserName" class="form-label">User Name</label>
                <input type="text" class="form-control" id="UserName" value="{{$data->UserName}}" name="UserName" placeholder="User Name">
            </div>
            <div class="col-12">
                <label for="Email" class="form-label">Email</label>
                <input type="text" class="form-control" id="Email" value="{{$data->Email}}" name="Email" placeholder="Email">
            </div>
            <div class="col-12">
                <label for="Password" class="form-label">Password</label>
                <input type="password" class="form-control" id="Password" value="" name="Password" placeholder="Password">
                <label class="form-label text-danger">Enter Old password or New password to change</label>
                <label class="form-label text-danger">
                    @if(Session::get('error'))

                            {{Session::get('error')}}

                    @endif
                </label>
            </div>

            <div class="col-12">
                <label for="UserRoleID" class="form-label">User Role</label>
                <select name="UserRoleID" id="UserRoleID" class="form-control">
                    @foreach($roledata as $item)
                        <option value="{{$item->UserRoleID}}" {{$item->UserRoleID == $data->UserRoleID ? 'selected' :''}}>{{$item->UserRoleName}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
