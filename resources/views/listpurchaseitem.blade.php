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
                <th scope="col">Purchase ID</th>
                <th scope="col">Product Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Unit Price</th>
                <th colspan="2">Action</th  >
            </tr>
            </thead>
            <tbody>
            @foreach($data as $item)
                <tr>
                    <th scope="row">{{$item->purchaseItemId}}</th>
                    <td>{{$item->purchaseID}}</td>
                    <td>{{$item->ProductName}}</td>
                    <td>{{$item->purchaseQuantity}}</td>
                    <td>{{$item->purchaseUnitPrice}}</td>
                    <td><a href="editpurchaseitem/{{$item->purchaseItemId}}"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                    <td><a href="deletepurchaseitem/{{$item->purchaseItemId}}"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                </tr>
            @endforeach


            </tbody>
        </table>
    </div>
@endsection
