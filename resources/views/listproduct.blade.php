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
                <th scope="col">Product Name</th>
                <th scope="col">Category</th>
                <th scope="col">Unit</th>
                <th scope="col">Selling Price</th>
                <th scope="col">Cost Price</th>
                <th scope="col">Stock</th>
                <th colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $item)
                <tr>
                    <th scope="row">{{$item->ProductID}}</th>
                    <td>{{$item->ProductName}}</td>
                    <td>{{$item->productCategoryName}}</td>
                    <td>{{$item->Unit}}</td>
                    <td>{{$item->SellingPrice}}</td>
                    <td>{{$item->CostPrice}}</td>
                    <td>{{$item->ProductStock}}</td>
                    <td><a href="editproduct/{{$item->ProductID}}"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                    <td><a href="deleteproduct/{{$item->ProductID}}"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                </tr>
            @endforeach


            </tbody>
        </table>
    </div>
@endsection
