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
                <th scope="col">Customer Type Name</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $item)
                <tr>
                    <th scope="row">{{$item->CustomerTypeID}}</th>
                    <td>{{$item->CustomerTypeName}}</td>
                    <td><a href="editcustomertype/{{$item->CustomerTypeID}}"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                    <td><a href="deletecustomertype/{{$item->CustomerTypeID}}"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                </tr>
            @endforeach


            </tbody>
        </table>
    </div>
@endsection
