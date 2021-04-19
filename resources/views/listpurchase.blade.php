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
                <th scope="col">Invoice Number</th>
                <th scope="col">Amount Invoice</th>
                <th scope="col">remarks</th>
                <th colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data as $item)
                <tr>
                    <th scope="row">{{$item->purchaseID}}</th>
                    <td>{{$item->AccountName}}</td>
                    <td>{{$item->InvoiceNumber}}</td>
                    <td>{{$item->AmountInvoice}}</td>
                    <td>{{$item->remarks}}</td>
                    <td><a href="editpurchase/{{$item->purchaseID}}"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
                    <td><a href="deletepurchase/{{$item->purchaseID}}"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                </tr>
            @endforeach


            </tbody>
        </table>
    </div>
@endsection
