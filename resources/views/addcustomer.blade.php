@extends('master')
@section('content')
    <div class="container my-3">
        <form class="row" action="addcustomer" method="post">
               <div>@csrf</div>
            <div class="col-12">
                <label for="CustomerName" class="form-label">Customer Name</label>
                <input type="text" class="form-control" id="CustomerName" name="CustomerName" placeholder="Customer Name">
            </div>
            <div class="col-12">
                <label for="inputTelephone" class="form-label">Telephone </label>
                <input type="text" class="form-control" id="inputTelephone" name="Telephone" placeholder="Telephone">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="inputAddress" name="Address" placeholder="Address">
            </div>
            <div class="col-12">
                <label for="inputRemarks" class="form-label">Remarks</label>
                <input type="text" class="form-control" id="inputRemarks" name="Remarks" placeholder="Remarks">
            </div>
            <div class="col-12">
                <label for="CustomerTypeID" class="form-label">Customer Type</label>
                <select name="CustomerTypeID" id="CustomerTypeID" class="form-control">
                    @foreach($data as $item)
                        <option value="{{$item->CustomerTypeID}}">{{$item->CustomerTypeName}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
@endsection
