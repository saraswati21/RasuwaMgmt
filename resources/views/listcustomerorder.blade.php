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
                <th scope="col">Order Status Name</th>
                <th scope="col">Order Date</th>
                <th scope="col">Order Number</th>
                <th colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $item)
                <tr>
                    <th scope="row">{{$item->CustomerOrderID}}</th>
                    <td>{{$item->AccountName}}</td>
                    <td>{{$item->OrderStatusName}}</td>
                    <td>{{$item->OrderDate}}</td>
                    <td>{{$item->OrderNumber}}</td>
                    <td><a href="editcustomerorder/{{$item->CustomerOrderID}}"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                    <td><a href="deletecustomerorder/{{$item->CustomerOrderID}}"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                </tr>
            @endforeach


            </tbody>
        </table>
    </div>
@endsection
