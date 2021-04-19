@extends('master')
@section('content')
    <div class="container my-3">
        <form class="row" action="addpurchase" method="post">
            <div>@csrf</div>
            <div class="col-12">
                <label for="inputAccounts" class="form-label">Accounts</label>
                <select  class="form-control" id="AccountID" name="AccountID">
                    @foreach($data as $item)
                        <option value="{{$item->AccountID}}">{{$item->AccountName}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12">
                <label for="inputInvoiceNumber" class="form-label">Invoice Number</label>
                <input type="text" class="form-control" id="InvoiceNumber" name="InvoiceNumber" placeholder="Invoice Number">
            </div>
            <div class="col-12">
                <label for="inputAmountInvoice" class="form-label">Amount Invoice</label>
                <input type="text" class="form-control" id="AmountInvoice" name="AmountInvoice" placeholder="Amount Invoice">
            </div>
            <div class="col-12">
                <label for="inputremarks" class="form-label">remarks</label>
                <input type="text" class="form-control" id="remarks" name="remarks" placeholder="remarks">
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
