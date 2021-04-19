@extends('master')
@section('content')
    <div class="container my-3">
        <form class="row" action="addsale" method="post">
            <div>@csrf</div>
            <div class="col-12">
                <label for="inputAccounts" class="form-label">Accounts</label>
                <select name="AccountID" id="AccountID" class="form-control">
                    @foreach($data as $item)
                        <option value="{{$item->AccountID}}">{{$item->AccountName}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12">
                <label for="inputInvoiceNumber" class="form-label">Invoice Number </label>
                <input type="text" class="form-control" id="inputInvoiceNumber" name="InvoiceNumber" placeholder="Invoice Number">
            </div>
            <div class="col-12">
                <label for="inputAmountInvoice" class="form-label">Amount Invoice</label>
                <input type="text" class="form-control" id="inputAmountInvoice" name="AmountInvoice" placeholder="Amount Invoice">
            </div>
            <div class="col-12">
                <label for="inputremarks" class="form-label">Remarks</label>
                <input type="text" class="form-control" id="inputremarks" name="remarks" placeholder="remarks">
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
