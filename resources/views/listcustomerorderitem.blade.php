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
                <th scope="col">Customer Order ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Ordered Quantity</th>
                <th colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $item)
                <tr>
                    <th scope="row">{{$item->OrderItemId}}</th>
                    <td>{{$item->CustomerOrderID}}</td>
                    <td>{{$item->ProductName}}</td>
                    <td>{{$item->OrderedQuantity}}</td>
                    <td><a href="editcustomerorderitem/{{$item->OrderItemId}}"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                    <td><a href="deletecustomerorderitem/{{$item->OrderItemId}}"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                </tr>
            @endforeach


            </tbody>
        </table>
    </div>
@endsection
