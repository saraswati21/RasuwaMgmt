@extends('master')
@section('content')
    <div class="container my-3">
        <h1>Edit Purchases</h1>
        <form class="row" action="/editpurchase" method="post">
            <div>@csrf</div>
            <div><input type="hidden" value="{{$data->purchaseID}}" name="purchaseID"></div>
            <div class="col-12">
                <label for="inputAccounts" class="form-label">Accounts </label>
                <select class="form-control" id="inputAccounts" name="AccountID">
                    @foreach($prodata as $item)
                        <option value="{{$item->AccountID}}" {{$item->AccountID == $data->AccountID ? 'selected' :''}}>{{$item->AccountName}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12">
                <label for="inputInvoiceNumber" class="form-label">Invoice Number</label>
                <input type="text" class="form-control" id="InvoiceNumber" value="{{$data->InvoiceNumber}}" name="InvoiceNumber" placeholder="InvoiceNumber">
            </div>
            <div class="col-12">
                <label for="inputAmountInvoice" class="form-label">Amount Invoice</label>
                <input type="text" class="form-control" id="AmountInvoice" value="{{$data->AmountInvoice}}" name="AmountInvoice" placeholder="AmountInvoice">
            </div>
            <div class="col-12">
                <label for="inputremarks" class="form-label">remarks</label>
                <input type="text" class="form-control" id="remarks" value="{{$data->remarks}}" name="remarks" placeholder="remarks">
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
