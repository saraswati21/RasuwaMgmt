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
                <th scope="col">Product Category Name</th>
                <th colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $item)
                <tr>
                    <th scope="row">{{$item->productCategoryID}}</th>
                    <td>{{$item->productCategoryName}}</td>
                    <td><a href="editproductcategories/{{$item->productCategoryID}}"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                    <td><a href="deleteproductcategories/{{$item->productCategoryID}}"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                </tr>
            @endforeach


            </tbody>
        </table>
    </div>
@endsection
