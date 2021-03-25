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
            <th scope="col">Customer Name</th>
            <th scope="col">Address</th>
            <th scope="col">Telephone</th>
            <th scope="col">Remarks</th>
            <th scope="col">Customer Type</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $item)
            <tr>
                <th scope="row">{{$item->CustomerID}}</th>
                <td>{{$item->CustomerName}}</td>
                <td>{{$item->Address}}</td>
                <td>{{$item->Telephone}}</td>
                <td>{{$item->remarks}}</td>
                <td>{{$item->CustomerTypeID}}</td>
                <td><a href="editcustomer/{{$item->CustomerID}}"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                <td><a href="deletecustomer/{{$item->CustomerID}}"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
            </tr>
        @endforeach


        </tbody>
    </table>
    </div>
@endsection
