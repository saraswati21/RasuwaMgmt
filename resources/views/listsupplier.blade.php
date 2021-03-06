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
                <th scope="col">Account Name</th>
                <th scope="col">Address</th>
                <th scope="col">Telephone</th>
                <th scope="col">Remarks</th>
                <th colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $item)
                <tr>
                    <th scope="row">{{$item->AccountID}}</th>
                    <td>{{$item->AccountName}}</td>
                    <td>{{$item->Address}}</td>
                    <td>{{$item->Telephone}}</td>
                    <td>{{$item->remarks}}</td>
                    <td><a href="editaccount/{{$item->AccountID}}"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                    <td><a href="deleteaccount/{{$item->AccountID}}"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
