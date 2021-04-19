@extends('master')
@section('content')
    <div class="container my-3">
        <h1>Edit Sales</h1>
        <form class="row" action="/editsale" method="post">
            <div>@csrf</div>
            <input type="hidden" value="{{$data->SaleID}}" name="SaleID">
            <div class="col-12">
                <label for="inputAccounts" class="form-label">Accounts</label>
                <select name="AccountID" id="inputAccounts" class="form-control">
                    @foreach($catdata as $item)
                        <option value="{{$item->AccountID}}" {{$item->AccountID == $data->AccountID ? 'selected' :''}}>{{$item->AccountName}}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-12">
                <label for="inputInvoiceNumber" class="form-label">Invoice Number </label>
                <input type="text" class="form-control" id="inputInvoiceNumber" value="{{$data->InvoiceNumber}}" name="InvoiceNumber" placeholder="Invoice Number">
            </div>
            <div class="col-12">
                <label for="inputAmountInvoice" class="form-label">Amount Invoice</label>
                <input type="text" class="form-control" id="inputAmountInvoice" value="{{$data->AmountInvoice}}" name="AmountInvoice" placeholder="Amount Invoice">
            </div>
            <div class="col-12">
                <label for="inputremarks" class="form-label">Remarks</label>
                <input type="text" class="form-control" id="inputremarks" value="{{$data->remarks}}" name="remarks" placeholder="remarks">
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
