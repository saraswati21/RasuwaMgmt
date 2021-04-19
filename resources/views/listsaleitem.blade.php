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
                <th scope="col">Sale</th>
                <th scope="col">Product Name</th>
                <th scope="col">Sale Quantity</th>
                <th scope="col">Sale Unit Price </th>
                <th colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $item)
                <tr>
                    <th scope="row">{{$item->SaleItemId}}</th>
                    <td>{{$item->SaleID}}</td>
                    <td>{{$item->ProductName}}</td>
                    <td>{{$item->SaleQuantity}}</td>
                    <td>{{$item->SaleUnitPrice}}</td>
                    <td><a href="editsaleitem/{{$item->SaleItemId}}"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                    <td><a href="deletesaleitem/{{$item->SaleItemId}}"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                </tr>
            @endforeach


            </tbody>
        </table>
    </div>
@endsection
