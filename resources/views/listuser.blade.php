@extends('master')
@section('content')

    <div class="container my-3">
        @if(Session::get('status'))
            <div class="alert alert-success" role="alert">
                {{Session::get('status')}}
            </div>
        @endif
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">User Name</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">User Role ID</th>
                <th colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $item)
                <tr>
                    <th scope="row">{{$item->UserID}}</th>
                    <td>{{$item->UserName}}</td>
                    <td>{{$item->Email}}</td>
                    <td>Encrypted</td>
                    <td>{{$item->UserRoleName}}</td>
                    <td><a href="edituser/{{$item->UserID}}"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                    <td><a href="deleteuser/{{$item->UserID}}"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                </tr>
            @endforeach


            </tbody>
        </table>
    </div>
@endsection
