@extends('master')
@section('content')
    <div class="container my-3">
        <form class="row" action="addcustomerorder" method="post">
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
                <label for="inputOrderNumber" class="form-label">Order Number</label>
                <input type="text" class="form-control" id="OrderNumber" name="OrderNumber" placeholder="Order Number">
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
